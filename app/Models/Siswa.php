<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nama_siswa', 'kelas_siswa', 'domisli_siswa', 'nama_file_pdf'];

    public function siswa() {
        return $this->belongsTo(KelasSiswa::class);
    }
}
