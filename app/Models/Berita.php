<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// Slug
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Berita extends Model
{
    use HasFactory;
    
    // Slug
    use Sluggable;
    use SluggableScopeHelpers;
    protected $table = 'berita';
    protected $fillable = [
        'judul_berita',
        'konten_berita',
        'gambar_berita',
        'waktu_berita',
        'slug_berita',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug_berita' => [
                'source' => 'judul_berita',
            ]
        ];
    }
}
