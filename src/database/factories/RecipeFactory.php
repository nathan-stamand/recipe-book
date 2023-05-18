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
    $caloriesTotal = $this->faker->numberBetween(1000, 5000);
    $servingsMade = $this->faker->numberBetween(1, 12);
    $caloriesPerServing = $caloriesTotal / $servingsMade;
    return [
          'title' => $this->faker->unique()->words(5, true),
          'slug' => $this->faker->unique()->slug(),
          'imageMain' => "https://loremflickr.com/" . $this->faker->numberBetween(80, 100) . "0/" . $this->faker->numberBetween(50, 70) . "0/dinner,food",
          'servingsMade' => $servingsMade,
          'rating' => $this->faker->numberBetween(1, 5),
          'favorite' => $this->faker->boolean(),
          'caloriesPerServing' => $caloriesPerServing,
          'caloriesTotal' => $caloriesTotal,
      ];
  }
}
