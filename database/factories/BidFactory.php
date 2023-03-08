<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bid>
 */
class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(7, 82),
            'auction_id' => mt_rand(1, 20),
            'bid_amount' => mt_rand(75000, 5000000),
            'result' => 'ongoing',
            'created_at' => fake()->dateTimeBetween('-4 week', '-1 days'),
        ];
    }
}
