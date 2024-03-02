<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenanggungJawab extends Model
{
    use HasFactory;
    protected $table = 'penanggung_jawabs';
    protected $primaryKey = 'id_pj';
    protected $fillable = [
        'nama_siswa',
        'id_kelas',
        'no_telp',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
