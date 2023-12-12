<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
