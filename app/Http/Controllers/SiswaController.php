<?php
namespace App\Http\Controllers;

use App\Models\KelasSiswa;
use Illuminate\Support\Str; // Import Str class for file naming
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::with('kelasGet')->get();
        $kelas_siswa = KelasSiswa::all();
        return view('admin.siswa.index', compact('siswa', 'kelas_siswa'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_siswa' => 'required',
            'kelas_siswa' => 'required',
            'domisli_siswa' => 'required'
        ], [
            'nama_siswa.required' => 'Nama is required',
            'kelas_siswa.required' => 'Kelas is required',
            'domisli_siswa.required' => 'Domisli is required'
        ]);

        $filePath = public_path('files/siswa/' . Str::slug($request->nama_siswa) . '.pdf');

        $siswa = Siswa::create([
            'nama_siswa'=>$request->nama_siswa,
            'kelas'=>$request->kelas_siswa,
            'domisli_siswa'=>$request->domisli_siswa,
            'nama_file_pdf'=>Str::slug($request->nama_siswa) . '.pdf'
        ]);

        $pdf = Pdf::loadView('admin.siswa.template', compact('siswa'));

        $pdf->save($filePath);

        return redirect('/siswa')->with('success', 'Success created data siswa');
    }

    public function create() {
        return view('admin.siswa.create');
    }

    public function update($id) {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    public function edit(Request $request, $id) {
        $request->validate([
            'nama_siswa' => 'required',
            'kelas_siswa' => 'required',
            'domisli_siswa' => 'required'
        ], [
            'nama_siswa.required' => 'Nama is required',
            'kelas_siswa.required' => 'Kelas is required',
            'domisli_siswa.required' => 'Domisli is required'
        ]);

        $data = Siswa::findOrFail($id);

        $filePath = public_path('files/siswa/') .$data->nama_file_pdf;

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $filePath = public_path('files/siswa/' . Str::slug($request->nama_siswa) . '.pdf');



        $siswa = $data->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas_siswa,
            'domisli_siswa' => $request->domisli_siswa,
            'nama_file_pdf' => Str::slug($request->nama_siswa) . '.pdf'
        ]);

        $pdf = Pdf::loadView('admin.siswa.template', compact('siswa'));

        $pdf->save($filePath);



        return redirect('/siswa')->with('success', 'Success updated name category');
    }

    public function destroy($id) {
        $data = Siswa::findOrFail($id);
        $filePath = public_path('files/siswa/') .$data->nama_file_pdf;

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $data->delete();
        return redirect('/siswa')->with('delete', 'Success deleted data');
    }
}
