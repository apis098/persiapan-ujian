<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = category::all();
        return view('category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama harus diisi'
        ]);

        category::query()->create($request->all());

        return to_route('category.index')->with('success', 'Berhasil tambah kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = category::findOrFail($id);
        return view('category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama harus diisi'
        ]);

        category::query()->findOrFail($id)->update($request->all());

        return to_route('category.index')->with('success', 'Berhasil update kategori');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            category::query()->findOrFail($id)->delete();
    
            return to_route('category.index')->with('success', 'Berhasil hapus kategori');
        }
    
    }
}
