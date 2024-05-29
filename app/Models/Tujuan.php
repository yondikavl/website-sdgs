<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;
    protected $table = 'tujuan';
    protected $primaryKey = 'pilar_id';
    protected $fillable = [
        'pilar_id',
        'ikon_tujuan',
        'nama_tujuan',
        'deskripsi_tujuan'
    ];

    public function Pilar()
    {
        return $this->belongsTo(Pilar::class, 'pilar_id', 'id');
    }

    public function Indikator()
    {
        return $this->hasMany(Indikator::class);
    }
}
