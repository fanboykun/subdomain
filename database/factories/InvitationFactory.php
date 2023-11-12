<?php

namespace Database\Factories;

use App\Enum\InvitationPlanningStep;
use App\Enum\InvitationStatus;
use App\Enum\InvitationType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invitation>
 */
class InvitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bride = $this->faker->firstNameFemale();
        $groom = $this->faker->firstNameMale();
        $subdomain = $bride.'and'.$groom;
        return [
            'title' => $this->faker->title(),
            'subdomain' => $subdomain,
            'main_wedding_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(InvitationStatus::class),
            'type' => $this->faker->randomElement(InvitationType::class),
            'planning_step' => $this->faker->randomElement(InvitationPlanningStep::class),
        ];
    }
}
