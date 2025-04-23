<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nomor_induk_siswa' => $this->faker->unique()->numberBetween(100000, 999999),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'kelas' => $this->faker->randomElement(['A', 'B', 'C']) . ' ' . $this->faker->randomLetter,
            'tanggal_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address,
            'nama_ibu' => $this->faker->name,
            'nama_ayah' => $this->faker->name,
            'pekerjaan_ayah' => $this->faker->jobTitle,
            'pekerjaan_ibu' => $this->faker->jobTitle,
            'penghasilan_ayah' => $this->faker->numberBetween(3000000, 10000000),
            'penghasilan_ibu' => $this->faker->numberBetween(2000000, 8000000),
            'hp_ayah' => $this->faker->bothify('08##########'),
            'hp_ibu' => $this->faker->bothify('08######'),
            'status' => $this->faker->randomElement(['aktif', 'non-aktif']),
        ];
    }
}
