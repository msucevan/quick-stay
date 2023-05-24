<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(50),
            'description' => $this->faker->realText(250),
            'location' => $this->faker->address(),
            'price' => rand(100, 10000),
            'bedrooms' => rand(1, 10),
            'bathrooms' => rand(1, 10),
            'amenities' => json_encode([
                'pool' => $this->faker->boolean(),
                'garden' => $this->faker->boolean(),
                'garage' => $this->faker->boolean(),
                'foo' => $this->faker->boolean(),
            ]),
        ];
    }
}