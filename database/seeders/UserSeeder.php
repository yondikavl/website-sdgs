<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'nama' => 'Fitra Ilyasa',
            'email' => 'fitrailyasa12@gmail.com',
            'roles_id' => 1,
        ]);
    }
}
