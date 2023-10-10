<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcriteria;

class Kriteria extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_kriteria',
        'bobot',
        'updated_at',
        'created_at'
    ];

    public function  subcriteria()
    {

        return $this->hasMany(Subcriteria::class, 'kriteria_id', 'id');
    }

    public function nilaiMahasiswa()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }

    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class);
    }
}
