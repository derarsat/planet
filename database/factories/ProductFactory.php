<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'image' => $this->faker->word,
            'brand' => $this->faker->randomElement(["planet","bubble-up","american-cola","reaktor"]),
            'heroImage' => $this->faker->word,
            'productHistoryImage' => $this->faker->word,
        ];
    }
}
