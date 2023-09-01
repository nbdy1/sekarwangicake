<?php

namespace App\Models;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_description', 'product_name', 'product_type',
    'product_price'
    ];

    protected $primaryKey = 'product_id';

    public function themes()
    {
        return $this->belongsToMany(Theme::class, 'product_theme', 'product_id', 'theme_id');
    }

    

}
