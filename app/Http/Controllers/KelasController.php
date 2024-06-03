<?php

namespace App\Http\Controllers;

use App\Models\KelasSiswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index() {
        $kelas_siswa = KelasSiswa::all();
        return view('admin.kelas.index', compact('kelas_siswa'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required'
        ], [
            'nama.required' => 'Nama is required'
        ]);

        KelasSiswa::create([
            'nama'=>$request->nama
        ]);

        return redirect('/kelas')->with('success', 'Success created data siswa');
    }

    public function create() {
        return view('admin.siswa.create');
    }

    public function update($id) {
        $kelas_siswa = KelasSiswa::findOrFail($id);
        return view('admin.kelas.edit', compact('kelas_siswa'));
    }

    public function edit(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
        ], [
            'nama.required' => 'Nama is required'
        ]);

        KelasSiswa::findOrFail($id)->update([
            'nama' => $request->nama
        ]);



        return redirect('/kelas')->with('success', 'Success updated name category');
    }

    public function destroy($id) {
        $data = KelasSiswa::findOrFail($id);
        $data->delete();
        return redirect('/kelas')->with('delete', 'Success deleted data');
    }
}
