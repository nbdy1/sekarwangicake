<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';
    protected $fillable = [
        'product_description', 'product_pictures', 'product_type',
        'product_slug', 'product_price', 'product_themes'
    ];

    public function themes()
    {
        return $this->belongsToMany(Theme::class, 'product_themes')
                    ->withPivot('theme_names');
    }
}