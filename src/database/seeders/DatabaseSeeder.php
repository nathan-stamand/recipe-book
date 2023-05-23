<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Direction;
use App\Models\Ingredient;
use App\Models\Tag;

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
    Tag::truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    $tags = [];
    $recipes = [];

    for ($i = 0; $i < 5; $i++) {
      $tags[] = Tag::factory()->create();
    }

    for ($i = 0; $i < 15; $i++) {
      $recipes[$i] = Recipe::factory()->create();
      for ($j = 0; $j < rand(5, 30); $j++) {
        $direction = Direction::factory()->create(['recipe_id' => $recipes[$i]->id, 'stepNumber' => $j + 1]);
        Ingredient::factory(rand(1, 4))->create(['direction_id' => $direction->id]);
      }
    }

    foreach ($recipes as $recipe) {
      $tags2 = $tags;
      $tag1 = $tags2[rand()&4];
      $recipe->tags()->attach($tag1);
      unset($tags2[array_search($tag1, $tags2)]);
      $tag2 = array_values($tags2)[rand()&3];
      $recipe->tags()->attach($tag2);
    }
  }
}
