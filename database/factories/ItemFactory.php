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
    public function definition()
    {
        return [
            'name' => fake()->sentence(mt_rand(1, 10)),
            'start_price' => fake()->numberBetween(50000, 5000000),
            'description' => fake()->sentence(mt_rand(15, 65)),
            'image' => 'item_img.png',
        ];
    }
}
