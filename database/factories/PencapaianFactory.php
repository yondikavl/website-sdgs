<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pencapaian>
 */
class PencapaianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subindikator_id' => $this->faker->numberBetween(1, 50),
            'ikon_pencapaian' => 'default-pencapaian.png',
            'nama_pencapaian' => $this->faker->word(),
            'deskripsi_pencapaian' => $this->faker->text(),
            'persentase' => $this->faker->numberBetween(1, 100),
        ];
    }
}
