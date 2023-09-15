<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = ['theme_name'];
    protected $primaryKey = 'theme_id';
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_theme');
    }
}


   