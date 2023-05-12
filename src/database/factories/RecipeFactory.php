<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
  public function definition()
  {
    return [
          'title' => $this->faker->unique()->words(5, true),
          'imageMain' => "https://loremflickr.com/" . $this->faker->numberBetween(80, 100) . "0/" . $this->faker->numberBetween(50, 70) . "0/dinner,food",
          'servingsMade' => $this->faker->randomFloat(2, 1, 12),
          'rating' => $this->faker->numberBetween(1, 5),
          'favorite' => $this->faker->boolean(),
          'caloriesPerServing' => $this->faker->numberBetween(100, 1000),
          'caloriesTotal' => $this->faker->numberBetween(1000, 5000),
      ];
  }
}
