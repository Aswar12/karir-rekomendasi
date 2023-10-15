<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'mahasiswa_id',
        'kriteria_id',
        'subcriteria_id',
        'nilai',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }


    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function subcriteria()
    {

        return $this->belongsTo(Subcriteria::class, 'subcriteria_id', 'id');
    }

    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class, 'rekomendasi_id', 'id');
    }
}