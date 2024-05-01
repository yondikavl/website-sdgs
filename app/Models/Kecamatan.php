<?php

namespace App\Models;

class Kecamatan extends District
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = [
        'code',
        'name',
        'meta',
        'city_code'
    ];

    public function Kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'city_code', 'id');
    }

    public function Kelurahan()
    {
        return $this->hasMany(Kelurahan::class);
    }
}
