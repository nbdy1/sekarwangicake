<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class ProductTheme extends Model
    {
        protected $table = 'ProductTheme';

        protected $fillable = ['theme_names'];

        public function product()
        {
            return $this->belongsTo(Product::class);
        }

        public function theme()
        {
            return $this->belongsTo(Theme::class);
        }
    }