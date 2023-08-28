<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'Theme';
    protected $fillable = ['theme_name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_themes')
                    ->withPivot('theme_names');
    }
}
