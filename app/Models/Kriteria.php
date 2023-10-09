<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'nama_kriteria',
        'bobot',
    ];
    
    public function nilai_mahasiswa()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }
    
    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class);
    }
    
    
}