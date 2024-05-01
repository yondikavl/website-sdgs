<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikator';
    protected $fillable = [
        'tujuan_id',
        'kode_indikator',
        'nama_indikator'
    ];

    public function Tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id', 'id');
    }

    public function Pencapaian()
    {
        return $this->hasMany(Pencapaian::class);
    }
}
