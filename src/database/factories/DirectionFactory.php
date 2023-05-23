<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DirectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
  public function definition(): array
  {
    return [
          'stepDescription' => $this->faker->paragraph(),
          'stepTime' => $this->faker->numberBetween(1, 60),
          'stepImage' => "https://loremflickr.com/" . $this->faker->numberBetween(40, 80) . "0/" . $this->faker->numberBetween(30, 60) . "0/cooking",
          'stepCompleted' => false,
      ];
  }
}
