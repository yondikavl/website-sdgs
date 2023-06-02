<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubIndikator extends Model
{
    use HasFactory;
    protected $table = 'subindikator';
    protected $fillable = [
        'indikator_id',
        'kode_sub',
        'nama_sub'
    ];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id', 'id');
    }

    public function aktivitas()
    {
        return $this->hasMany(Aktivitas::class);
    }
}
