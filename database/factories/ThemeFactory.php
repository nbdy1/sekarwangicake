<?php

namespace Database\Factories;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThemeFactory extends Factory
{
   
    protected $model = Theme::class;
    public function definition()
    {
        $themeNames = ['Birthday', 'Wedding', 'Anniversary', 'Baby Shower', 'Valentine', 'Holiday'];

        return [
            'theme_name' => $this->faker->randomElement($themeNames),
        ];
    }
}
