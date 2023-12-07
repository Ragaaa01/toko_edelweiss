<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{   
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $table = 'kategori';
    protected $fillable = [
        'name', 'slug'
    ];

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }
}

