<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playfield>
 */
class PlayfieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sponsor' => $this->faker->name(),
            'size' => $this->faker->randomElement(['normal', 'small']),
            'last_maintained_at' => $this->faker->date(),
        ];
    }
}
