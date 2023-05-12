<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
  public function definition()
  {
    return [
          'name' => $this->faker->word(),
          'cost' => $this->faker->numberBetween(25, 15000),
          'containsMeat' => $this->faker->boolean(),
          'containsAnimalProduct' => $this->faker->boolean()
      ];
  }
}
