<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owl>
 */
class OwlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'version_nr' => $this->faker->numberBetween(1, 4),
            'scheduled_at' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'topics' => $this->faker->paragraph
        ];
    }
}
