<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;
    protected $table = 'aktivitas';
    protected $fillable = [
        'subindikator_id',
        'ikon_aktivitas',
        'nama_aktivitas',
        'deskripsi_aktivitas'
    ];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'subindikator_id', 'id');
    }
}
