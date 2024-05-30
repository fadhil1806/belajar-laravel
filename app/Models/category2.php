<?php

namespace App\Http\Controllers;

use App\Models\Kategori as ModelsKategori;
use Illuminate\Http\Request;

class Kategori extends Controller
{
    //
    public function index() {
        $kategori = ModelsKategori::get();
        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function create() {
        return view('admin.kategori.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kategori' => 'required'
        ], [
            'nama_kategori.required' => 'Nama Kategori Harus Diisi'
        ]);

        ModelsKategori::create([
            'nama' => $request->nama_kategori
        ]);

        return redirect('/kategori')->with('success', 'berhasil menambahkan data kategori');
    }

    public function edit($id) {
        $kategori = ModelsKategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_kategori'=>'required'
        ], [
            'nama_kategori.required'=>'Nama kategori harus diisi'
        ]);

        ModelsKategori::findOrFail($id)->update([
            'nama' => $request->nama_kategori
        ]);

        return redirect('/kategori')->with('success', 'Success updated name category');
    }

    public function destroy($id) {
        ModelsKategori::findOrFail($id)->delete();
        return redirect('/kategori')->with('success', 'Success deleted category');
    }
}
