<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Barang extends Model
{
    use Sluggable;
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang', 'harga_sewa', 'gambar', 'brand', 'stok', 'deskripsi', 'slug'
    ];

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'nama_barang'
            ]
            ];
    }

    /** 
     * The categories that belong to the book
     * 
     * @return \Illuminate\Database\Eloquent\BelongsToMany
     */
    public function kategori(): BelongsToMany
    {
        return $this->belongToMany(Kategori::class, 'kategori_barang', 'barang_id', 'kategori_id');
    }
}
