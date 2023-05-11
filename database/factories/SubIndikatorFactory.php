<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubIndikator>
 */
class SubIndikatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'indikator_id' => $this->faker->numberBetween(1, 17),
            'ikon_sub' => 'default.png',
            'nama_sub' => $this->faker->word(),
            'deskripsi_sub' => $this->faker->text(),
        ];
    }
}
