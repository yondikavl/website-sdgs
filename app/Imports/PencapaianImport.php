<?php
namespace App\Imports;

use App\Models\Pencapaian;
use App\Models\Indikator;
use App\Models\Kecamatan;
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

        // Fetch or create the Pencapaian record
        $pencapaian = Pencapaian::create(
            [
                'indikator_id' => $kode_indikator,
                'tahun' => $this->tahun,
                'tipe' => $tipe,
                'persentase' => $persentase,
                'sumber_data' => $sumber_data,
            ]
        );

        if (!empty($row[5])) {
            $kecamatanNames = explode(',', $row[5]);
            $kecamatanIds = [];

            foreach ($kecamatanNames as $kecamatanName) {
                $kecamatanName = trim($kecamatanName);
                $kecamatan = Kecamatan::where('city_code', 1871)->firstOrCreate(['name' => $kecamatanName]);

                $kecamatanIds[] = $kecamatan->id;
            }

            // Attach or sync Kecamatan with the Pencapaian record
            $pencapaian->kecamatan()->sync($kecamatanIds);
        }

        return $pencapaian;
    }

    public function startRow(): int
    {
        return 3;
    }
}
