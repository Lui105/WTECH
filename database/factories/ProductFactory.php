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
            'name' => $this->faker->words(2, true),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'description'=> $this->faker->text(200),
            'brand' => $this->faker->randomElement(['logitech', 'microsoft', 'asus', 'yenkee']),
            'parameters' => [
                'color' => ucfirst($this->faker->safeColorName()),
                'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
                'weight' => $this->faker->numberBetween(100, 5000) . ' grams'
            ],
            'created_at' => now(),
            'updated_at' => now(),
            'status' => $this->faker->randomElement(['In stock', 'Out of stock'])
        ];
    }
}
