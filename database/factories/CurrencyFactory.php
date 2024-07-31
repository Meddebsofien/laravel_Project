<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->currencyCode(),
            'code' => $this->faker->currencyCode(),
            'symbol' => $this->faker->randomElement(['$', '€', '£', '¥']),
            'symbol_first' => $this->faker->boolean(),
            'decimal_mark' => $this->faker->randomElement(['.', ',']),
            'thousands_separator' => $this->faker->randomElement([',', '.']),
            'icon' => $this->faker->imageUrl(32, 32),
        ];
    }
}
