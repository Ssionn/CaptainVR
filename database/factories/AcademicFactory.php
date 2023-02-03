<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AcademicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'package_id' => $this->faker->numberBetween(1, 10000),
            'title' => $this->faker->unique()->word,
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
        ];
    }
}
