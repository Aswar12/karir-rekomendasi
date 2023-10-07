<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;
use App\Models\Kriteria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NilaiMahasiswa>
 */
class NilaiMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mahasiswa_id' => User::all()->random()->id, // Pilih ID mahasiswa secara acak dari tabel users
            'kriteria_id' => Kriteria::all()->random()->id,
            'nilai' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
