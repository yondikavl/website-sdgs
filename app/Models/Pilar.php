<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilar extends Model
{
    use HasFactory;
    protected $table = 'pilar';
    protected $fillable = [
        'ikon_pilar',
        'nama_pilar',
        'deskripsi_pilar'
    ];

    public function Indikator()
    {
        return $this->hasMany(Indikator::class);
    }
}
