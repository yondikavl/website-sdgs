<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    use HasFactory;
    protected $table = 'pencapaian';
    protected $fillable = [
        'indikator_id',
        'tahun',
        'tipe',
        'persentase',
        'sumber_data',
    ];

    public function Indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id', 'kode_indikator');
    }

    public function Alamat()
    {
        return $this->belongsToMany(Kelurahan::class, 'alamat_pencapaian', 'pencapaian_id', 'kelurahan_id');
    }
}
