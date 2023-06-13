<?php

namespace Database\Seeders;

use App\Models\pencapaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PencapaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pencapaian::factory(100)->create();
    }
}
