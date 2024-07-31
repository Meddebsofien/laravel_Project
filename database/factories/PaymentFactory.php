<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\BookingGuest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'namecard' => $this->faker->name,
            'securitynum' => $this->faker->numberBetween(100, 999),
            'dateexp' => $this->faker->creditCardExpirationDateString,
            'numcard' => $this->faker->creditCardNumber,
            'booking_guest_id' => BookingGuest::factory(), // Assurez-vous qu'il y a une factory pour Booking
        ];
    }
}
