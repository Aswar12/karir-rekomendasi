<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $fillable = [
        'pekerjaan_id',
        'total_skor',

    ];
    public function nilaiPekerjaan()
    {
        return $this->belongsTo(NilaiPekerjaan::class, 'pekerjaan_id', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function perkerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id', 'id');
    }
}
