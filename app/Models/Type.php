<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

   protected $fillable = [
    'title',
    'meta_desc',
    'slug',
    'description',
    'price',
    'discount',
    'stock',
    'sku',
    'image',
    'status',
];
    /**
     * Get the route key name for model binding.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Relasi ke produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
       
}

