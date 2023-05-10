<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikator';
    protected $fillable = [
        'pilar_id',
        'ikon_indikator',
        'nama_indikator',
        'deskripsi_indikator'
    ];

    public function pilar()
    {
        return $this->belongsTo(Pilar::class, 'pilar_id', 'id');
    }

    public function subindikator()
    {
        return $this->hasMany(SubIndikator::class);
    }
}
