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
            <h3>Tambah makanan Baru</h3>
        </div>

        <div class="row mt-3">
            <form method="POST" action="{{route('food.store')}}">
                @csrf
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Kategori makanan</td>
                            <td>
                                <select class="form-control" name="category" id="category">
                                    @foreach($category as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                    @endforeach
                                  </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Makanan</td>
                            <td>
                                <input autocomplete="off" value="{{ old('name') }}" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>
                                <input autocomplete="off" value="{{ old('description') }}" class="form-control" type="text"
                                    name="description">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success" type="submit">Tambah Data</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
