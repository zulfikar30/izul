<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Npm' => $this->faker->numberBetween(187006073, 187006030),
            'Nama' => $this->faker->name,
            'Kelas' => $this->faker->randomElement(['A', 'B', 'C']),
            'Alamat' => $this->faker->address,
        ];
    }
}
