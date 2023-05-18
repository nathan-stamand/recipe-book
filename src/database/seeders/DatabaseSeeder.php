<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
  public function run()
  {
    Recipe::truncate();

    for ($i = 0; $i < 5; $i++) {
      $recipe = Recipe::factory()->create();
      Ingredient::factory(rand(5, 25))->create(['recipe_id' => $recipe->id]);
    }
  }
}
