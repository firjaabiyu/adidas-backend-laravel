<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(100, 1000),
            'type' => fake()->randomElement(['shoes', 't-shirt', 'jerseys', 'hat', 'jacket']),
            'category' => fake()->randomElement(['Men Originals ', 'Men Sportwear ', 'Men Jerseys ']),
        ];
    }
}
