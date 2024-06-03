<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    use HasFactory;

    protected $table = 'kelas_siswa';
    protected $fillable = ['nama'];

    public function siswaGet()
    {
        return $this->hasMany(Siswa::class, 'kelas');
    }
}
