<?php

namespace Database\Seeders;

use App\Models\NilaiMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NilaiMahasiswa::Factory()->count(10)->create();
    }
}
