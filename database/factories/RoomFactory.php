<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => rand(1, 100),
            'type' => fake()->firstNameMale(),
            'detail' => fake()->address(),
            'price' => rand(350, 500),
            'space' => '30',
            'image' => fake()->imageUrl(),
            'vibe' => 'ธรรมชาติ',
            'maximum'=>rand(1,2),
        ];
    }
}
