<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\PenanggungJawab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arsip extends Model
{
    use HasFactory;
    protected $table = 'arsip_dokumentasis';
    protected $primaryKey = 'id_arsip';
    protected $fillable = [
        'id_kelas',
        'karung_kiloan',
        'tgl_pengiriman',
        'tgl_setor',
        'id_pj',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function penanggungJawab()
    {
        return $this->belongsTo(PenanggungJawab::class, 'id_pj');
    }
}