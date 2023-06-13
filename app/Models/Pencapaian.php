<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    use HasFactory;
    protected $table = 'pencapaian';
    protected $fillable = [
        'subindikator_id',
        'ikon_pencapaian',
        'nama_pencapaian',
        'deskripsi_pencapaian',
        'persentase',
    ];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'subindikator_id', 'id');
    }
}
