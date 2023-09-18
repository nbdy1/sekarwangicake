<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomCake extends Product
{
    protected $fillable = [
        'product_description', 
        'product_name', 
        'product_type',
        'product_selling_price',  
        'product_original_price', 
        'product_slug',
        'testimonial_client_name',
        'testimonial_client_avatar',
        'testimonial_quote',
        'testimonial_rating_star'
    ];

    protected $primaryKey = 'product_id';

    public function sluggable(): array
    {
        return [
            'product_slug' => [
                'source' => 'product_name'
            ]
        ];
    }

    public function cake_testimonials()
    {
        return $this->hasOne(Product::class, 'product_id', 'product_id');
    }
}
