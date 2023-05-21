<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Direction;
use App\Models\Ingredient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    Ingredient::truncate();
    Direction::truncate();
    Recipe::truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    for ($i = 0; $i < 15; $i++) {
      $recipe = Recipe::factory()->create();
      for ($j = 0; $j < rand(5, 30); $j++) {
        $direction = Direction::factory()->create(['recipe_id' => $recipe->id, 'stepNumber' => $j + 1]);
        Ingredient::factory(rand(1, 4))->create(['direction_id' => $direction->id]);
      }
    }
  }
}
