<?php

namespace App\Models;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'product_description', 'product_pictures', 'product_type',
    //     'product_slug', 'product_price', 'product_themes'
    // ];

    protected $fillable = [
        'product_description', 'product_name', 'product_type',
    'product_price'
    ];

    // public function themes()
    // {
    //     return $this->belongsToMany(Theme::class, 'product_themes')
    //                 ->withPivot('theme_names');
    // }
}
