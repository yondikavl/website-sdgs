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
                'indikator_id' => '1.1.1',
                'tahun' => '2023',
                'persentase' => 35,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SD',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.1.1',
                'tahun' => '2024',
                'persentase' => 47,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SD',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.1.1',
                'tahun' => '2023',
                'persentase' => 22,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SMP',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.1.1',
                'tahun' => '2024',
                'persentase' => 34,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SMP',
                'keterangan' => '-'
            ],
            // [
            //     'indikator_id' => '1.2.1',
            //     'tahun' => '2022',
            //     'persentase' => 35,
            //     'sumber_data' => 'Dinas Sosial',
            //     'tingkatan' => 'SD',
            //     'keterangan' => '-'
            // ],
            // [
            //     'indikator_id' => '1.2.1',
            //     'tahun' => '2022',
            //     'persentase' => 57,
            //     'sumber_data' => 'Dinas Sosial',
            //     'tingkatan' => 'SMP',
            //     'keterangan' => '-'
            // ],
        ];
        Pencapaian::query()->insert($pencapaian);
    }
}
