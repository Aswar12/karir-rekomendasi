<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kriteria',
        'bobot',
        'updated_at',
        'created_at'
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id', 'id_kriteria');
    }
}