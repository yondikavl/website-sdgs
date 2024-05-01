<?php

namespace App\Models;

class Kabupaten extends City
{
    use HasFactory;
    protected $table = 'kabupaten';
    protected $fillable = [
        'code',
        'name',
        'meta',
        'province_code'
    ];

    public function Provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'province_code', 'id');
    }

    public function Kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
