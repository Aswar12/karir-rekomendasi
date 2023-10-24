<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPekerjaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pekerjaan_id',
        'kriteria_id',
        'subcriteria_id',
        'nilai',

    ];


    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id', 'id');
    }


    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function subcriteria()
    {

        return $this->belongsTo(Subcriteria::class, 'subcriteria_id', 'id');
    }
}
