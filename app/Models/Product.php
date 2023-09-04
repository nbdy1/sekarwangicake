<?php

namespace App\Models;

use App\Models\Theme;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'product_description', 'product_name', 'product_type',
    'product_price', 'product_slug'
    ];

    protected $primaryKey = 'product_id';


    public function themes()
    {
        return $this->belongsToMany(Theme::class, 'product_theme', 'product_id', 'theme_id');
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
    }

    public function sluggable(): array
    {
        return [
            'product_slug' => [
                'source' => 'product_name'
            ]
        ];
    }
    

}
