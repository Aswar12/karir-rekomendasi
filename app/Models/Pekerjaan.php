<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_pekerjaan',
        'updated_at',
        'created_at'
    ];


    public function nilaipekerjaan()
    {
        return $this->hasMany(NilaiPekerjaan::class, 'pekerjaan_id', 'id');
    }
}
