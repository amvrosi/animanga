<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_genres', 'genre_id', 'product_id');
    }
}
