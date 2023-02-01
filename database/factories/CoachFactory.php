<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'image' => $this->faker->imageUrl(),
            'profession' => $this->faker->jobTitle,
            'bio' => $this->faker->paragraph(10),
            'location' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
        ];
    }
}
