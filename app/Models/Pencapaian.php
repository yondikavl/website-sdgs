<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    use HasFactory;
    protected $table = 'pencapaian';
    protected $fillable = [
        'tujuan_id',
        'indikator_id',
        'tahun',
        'tipe',
        'persentase',
        'sumber_data',
    ];

    public function Tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id', 'id');
    }

    public function Alamat()
    {
        return $this->belongsToMany(Kelurahan::class, 'alamat_pencapain', 'pencapaian_id', 'kelurahan_id');
    }
}
