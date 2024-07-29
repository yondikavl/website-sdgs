<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;

    protected $table = 'indikator';
    protected $primaryKey = 'kode_indikator';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'tujuan_id',
        'kode_indikator',
        'nama_indikator',
        'tipe',
        'rumus',
        'deskripsi',
        'tinggi',
        'sedang',
        'rendah'
    ];

    public function Tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id', 'id');
    }

    public function Pencapaian()
    {
        return $this->hasMany(Pencapaian::class, 'indikator_id', 'kode_indikator');
    }
}
