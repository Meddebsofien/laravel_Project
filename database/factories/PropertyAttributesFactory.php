<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyAttributes>
 */
class PropertyAttributesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nickname' => $this->faker->name,
            'name' => $this->faker->name,
            'square_metre' => $this->faker->numberBetween(20, 500),
            'time_zone' => $this->faker->timezone,
            'type' => $this->faker->randomElement(['House', 'Apartment', 'Villa', 'Lodge']),
            'maximum_capacity' => $this->faker->numberBetween(1, 10),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'beds' => $this->faker->numberBetween(1, 5),
            'bathroom' => $this->faker->numberBetween(1, 3),
            'check_in' => $this->faker->date(),
            'check_out' => $this->faker->date(),
            'preparation_time' => $this->faker->randomElement(['1 hour', '2 hours', '3 hours']),
            'description' => $this->faker->paragraph,
            'created_at' => now(),
        ];
    }
}
