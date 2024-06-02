<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelasSiswa extends Model
{
    use HasFactory;

    protected $table = 'kelas_siswa';
    protected $fillable = ['nama'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
