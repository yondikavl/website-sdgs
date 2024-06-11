<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
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
