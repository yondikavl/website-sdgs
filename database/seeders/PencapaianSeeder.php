<?php

namespace Database\Seeders;

use App\Models\Pencapaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PencapaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pencapaian = [
            [
                'id' => 1,
                'indikator_id' => 1,
                'tahun' => '2022',
                'tipe' => '%',
                'persentase' => 100,
                'sumber_data' => 'Dinas Sosial',
            ],
            [
                'id' => 2,
                'indikator_id' => 1,
                'tahun' => '2023',
                'tipe' => '%',
                'persentase' => 100,
                'sumber_data' => 'Dinas Sosial',
            ]
        ];
        Pencapaian::query()->insert($pencapaian);
    }
}
