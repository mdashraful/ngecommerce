<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 10),
            'name' => fake()->unique()->sentence(),
            'description' => fake()->text(),
            'quantity' => rand(5, 10),
            'price' => fake()->numberBetween(100, 500),
            'active' => 1,
        ];
    }
}
