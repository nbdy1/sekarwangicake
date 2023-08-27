<?php

namespace App\Models;

use App\Models\Theme;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductTheme extends Model
{
    use HasFactory;
    public function themes()
{
    return $this->belongsToMany(Theme::class, 'product_themes')
                ->withPivot('theme_names');
}

// Theme.php
public function products()
{
    return $this->belongsToMany(Product::class);
}
}
