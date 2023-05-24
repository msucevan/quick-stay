<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => rand(1, 100),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->email(),
            'customer_phone' => $this->faker->phoneNumber(),
        ];
    }
}