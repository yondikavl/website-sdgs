<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikator';
    protected $fillable = [
        'ikon_indikator',
        'nama_indikator',
        'deskripsi_indikator'
    ];

    public function subindikator()
    {
        return $this->hasMany(SubIndikator::class);
    }
}
