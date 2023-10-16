<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'mahasiswa_id',
        'total_skor',

    ];

    public function nilaiMahasiswa()
    {
        return $this->belongsTo(NilaiMahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }
}
