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
            'indikator_id' => $this->faker->numberBetween(1, 50),
            'subindikator_id' => $this->faker->numberBetween(1, 50),
            'tahun' => $this->faker->text(10),
            'tipe' => $this->faker->text(10),
            'persentase' => $this->faker->numberBetween(1, 100),
        ];
    }
}
