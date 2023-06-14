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
        'subindikator_id',
        'tahun',
        'tipe',
        'persentase',
        'sumber',
    ];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'subindikator_id', 'id');
    }
}
