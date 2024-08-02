<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $table = 'pencapaian';
    protected $fillable = [
        'indikator_id',
        'nama_kegiatan',
        'tahun',
        'persentase',
        'sumber_data',
        'tingkatan',
        'anggaran',
        'sumber_pendanaan',
        'lokasi',
        'keterangan',
        'user_id',
        'is_read'
    ];

    public function Indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id', 'kode_indikator');
    }

    public function Kecamatan()
    {
        return $this->belongsToMany(Kecamatan::class, 'alamat_pencapaian', 'pencapaian_id', 'kecamatan_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hasKecamatan($kecamatanId)
    {
        return $this->Kecamatan->contains('id', $kecamatanId);
    }

}
