<?php

namespace App\Imports;

use App\Models\Pencapaian;
use App\Models\Indikator;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PencapaianImport implements ToModel, WithStartRow
{
    public $tahun;

    public function __construct($tahun){
        $this->tahun = $tahun;
    }

    public function model(array $row)
    {
        $kode_indikator = $row[0] ?? null;
        $tipe = $row[2];
        $persentase = $row[3];
        $sumber_data = $row[4];

        // $existingPencapaian = Indikator::where('kode_indikator', $kode_indikator)->first();

        // if (!$existingPencapaian) {
            return new Pencapaian([
                'indikator_id' => $kode_indikator,
                'tahun' => $this->tahun,
                'tipe' => $tipe,
                'persentase' => $persentase,
                'sumber_data' => $sumber_data,
            ]);
        // }

        return null;
    }

    public function startRow(): int
    {
        return 3;
    }
    
}
