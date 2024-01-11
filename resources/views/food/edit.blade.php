@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <h3>Halaman edit</h3>
        </div>

        <div class="row mt-3">
            <form method="POST" action="{{route('food.update',$data->id)}}">
                @method('PUT')
                @csrf
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama Makanan</td>
                            <td>
                                <input autocomplete="off" value="{{$data->name}}" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>
                                <input autocomplete="off" value="{{$data->description}}" class="form-control" type="text"
                                    name="description">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success" type="submit">Edit Data</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
