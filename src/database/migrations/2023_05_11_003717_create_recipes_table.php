<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up(): void
  {
    Schema::create('recipes', function (Blueprint $table) {
        $table->id();
        $table->string('title')->unique();
        $table->string('slug')->unique();
        $table->text('description');
        $table->string('imageMain');
        $table->integer('servingsMade');
        $table->boolean('favorite');
        $table->integer('rating');
        $table->integer('caloriesPerServing');
        $table->integer('caloriesTotal');
        $table->timestamps();
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down(): void
  {
    Schema::dropIfExists('recipe');
  }
}
