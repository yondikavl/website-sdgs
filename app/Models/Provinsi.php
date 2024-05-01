<?php

namespace App\Models;

class Provinsi extends Province
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $fillable = [
        'code',
        'name',
        'meta',
    ];

    public function Kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
