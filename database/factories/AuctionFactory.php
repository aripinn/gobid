<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auction>
 */
class AuctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => fake()->unique()->numberBetween(1, 25),
            'start_date' => fake()->dateTimeBetween('-4 week', '-1 days'),
            'status' => 'open',
        ];
    }
}
