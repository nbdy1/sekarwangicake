<?php

namespace Database\Factories;

use App\Models\Product;
// use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $productTypes = ['CustomCake', 'SimpleCake', 'Pastry'];

        return [
            'product_name' => $this->faker->unique()->word,
            'product_description' => $this->faker->sentence,
            'product_type' => $this->faker->randomElement($productTypes),
            'product_price' =>$this->faker->numberBetween(5000, 150000),
        ];
    }
}
