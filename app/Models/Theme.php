<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = ['theme_name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_themes')
                    ->withPivot('theme_names');
    }
}

   