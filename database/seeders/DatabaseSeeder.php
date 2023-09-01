<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $themes = Theme::factory(5)->create(); // Use Theme::factory
        $products = Product::factory(10)->create();

        $products->each(function ($product) use ($themes) {
            $product->themes()->attach($themes->random(rand(1, 3))->pluck('id')->toArray());
        });
    }
}
