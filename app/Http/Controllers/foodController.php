<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\food;
use Illuminate\Http\Request;

class foodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = food::all();
        return view('food.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = category::all();
        return view('food.create',compact('category'));
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

        food::query()->create($request->all()); 

        return to_route('food.index')->with('success', 'Berhasil tambah kategori');
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
        $data = food::findOrFail($id);
        return view('food.edit',compact('data'));
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

        food::query()->findOrFail($id)->update($request->all());

        return to_route('food.index')->with('success', 'Berhasil update kategori');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        food::query()->findOrFail($id)->delete();

        return to_route('food.index')->with('success', 'Berhasil hapus kategori');

    }
}
