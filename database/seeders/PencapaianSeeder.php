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
                'tipe' => '%',
                'persentase' => 35,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SD',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.1.1',
                'tahun' => '2024',
                'tipe' => '%',
                'persentase' => 55,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SD',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.1.1',
                'tahun' => '2023',
                'tipe' => '%',
                'persentase' => 25,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SMP',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.1.1',
                'tahun' => '2024',
                'tipe' => '%',
                'persentase' => 45,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SMP',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.2.1',
                'tahun' => '2022',
                'tipe' => '%',
                'persentase' => 35,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SD',
                'keterangan' => '-'
            ],
            [
                'indikator_id' => '1.2.1',
                'tahun' => '2022',
                'tipe' => '%',
                'persentase' => 57,
                'sumber_data' => 'Dinas Sosial',
                'tingkatan' => 'SMP',
                'keterangan' => '-'
            ],
        ];
        Pencapaian::query()->insert($pencapaian);
    }
}
