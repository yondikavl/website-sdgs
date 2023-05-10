<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aktivitas>
 */
class AktivitasFactory extends Factory
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
            'ikon_aktivitas' => $this->faker->word(),
            'nama_aktivitas' => $this->faker->word(),
            'deskripsi_aktivitas' => $this->faker->text(),
        ];
    }
}
