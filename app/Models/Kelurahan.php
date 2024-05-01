<?php

namespace App\Models;

class Kelurahan extends Village
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $fillable = [
        'code',
        'name',
        'meta',
        'district_code'
    ];

    public function Kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'district_code', 'id');
    }
}