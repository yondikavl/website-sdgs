<?php

namespace Database\Seeders;

use App\Models\Pilar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PilarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pilar = [
            [
                'id' => 1,
                'ikon_pilar' => 'default.png',
                'nama_pilar' => 'Pilar Pembangunan Sosial',
                'deskripsi_pilar' => 'Pilar Pembangunan Sosial merupakan pilar yang berfokus pada pembangunan sumber daya manusia, kesehatan, pendidikan, dan kebudayaan.',
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'id' => 2,
                'ikon_pilar' => 'default.png',
                'nama_pilar' => 'Pilar Pembangunan Ekonomi',
                'deskripsi_pilar' => 'Pilar Pembangunan Ekonomi merupakan pilar yang berfokus pada pembangunan ekonomi yang berkelanjutan, inklusif, dan berkeadilan.',
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'id' => 3,
                'ikon_pilar' => 'default.png',
                'nama_pilar' => 'Pilar Pembangunan Lingkungan',
                'deskripsi_pilar' => 'Pilar Pembangunan Lingkungan merupakan pilar yang berfokus pada pembangunan lingkungan hidup yang berkelanjutan.',
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'id' => 4,
                'ikon_pilar' => 'default.png',
                'nama_pilar' => 'Pilar Pembangunan Hukum dan Tata Kelola',
                'deskripsi_pilar' => 'Pilar Pembangunan Hukum dan Tata Kelola merupakan pilar yang berfokus pada pembangunan hukum dan tata kelola pemerintahan yang baik.',
                'created_at'=> now(),
                'updated_at'=> now()
            ]
        ];
        Pilar::query()->insert($pilar);
    }
}
