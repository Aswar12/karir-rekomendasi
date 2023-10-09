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
        'nilai',
    ];
 
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
    
    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class);
    }

    
    
    
}