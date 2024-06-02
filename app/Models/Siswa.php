<?php

namespace App\Models;

use App\Models\KelasSiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nama_siswa', 'kelas_siswa', 'domisli_siswa', 'nama_file_pdf'];

    public function kelas()
    {
        return $this->belongsTo(KelasSiswa::class);
    }
}
