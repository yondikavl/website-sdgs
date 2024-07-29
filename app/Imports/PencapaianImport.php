<?php
namespace App\Imports;

use App\Models\Pencapaian;
use App\Models\Indikator;
use App\Models\Kecamatan;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Auth;

class PencapaianImport implements ToModel, WithStartRow
{
    public $tahun;
    public $userId;

    public function __construct($tahun)
    {
        $this->tahun = $tahun;
        $this->userId = Auth::user()->id;
    }

    public function model(array $row)
    {
        $kode_indikator = $row[0];
        $persentase = $row[2];
        $sumber_data = $row[3];
        $nama_kecamatan = $row[4] ?? '';
        $nama_kegiatan = $row[5] ?? '';
        $anggaran = $row[6] ?? '';
        $sumber_pendanaan = $row[7] ?? '';
        $lokasi = $row[8] ?? '';
        $tingkatan = $row[9] ?? '';
        $keterangan = $row[10] ?? '';

        // Validate the input data
        if (!$kode_indikator || !$persentase || !$sumber_data) {
            return null; // Skip this row if any required field is missing
        }

        // Check if kode_indikator exists in the database
        $indikator = Indikator::where('kode_indikator', $kode_indikator)->first();
        if (!$indikator) {
            return null; // Skip this row if kode_indikator does not exist
        }

        // Fetch or create the Pencapaian record
        $pencapaian = Pencapaian::create([
            'indikator_id' => $indikator->id,
            'tahun' => $this->tahun,
            'persentase' => $persentase,
            'sumber_data' => $sumber_data,
            'nama_kegiatan' => $nama_kegiatan,
            'anggaran' => $anggaran,
            'sumber_pendanaan' => $sumber_pendanaan,
            'lokasi' => $lokasi,
            'tingkatan' => $tingkatan,
            'keterangan' => $keterangan,
            'user_id' => $this->userId,
        ]);

        if (!empty($nama_kecamatan)) {
            $kecamatanNames = explode(',', $nama_kecamatan);
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
