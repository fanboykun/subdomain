<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guest_name' => $this->faker->name(),
            'guest_email' => $this->faker->email(),
            'guest_phone' => $this->faker->phoneNumber(),
            'guest_type' => $this->faker->randomElement(['vip', 'common']),
            'guest_status' => $this->faker->randomElement(['new', 'openend', 'invited', 'going', 'not_going']),
            'guest_amount' => $this->faker->numberBetween(1, 2),
            'code' => Str::random(8)
        ];
    }
}
