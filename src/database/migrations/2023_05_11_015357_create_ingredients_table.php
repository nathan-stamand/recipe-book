<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('ingredients', function (Blueprint $table) {
        $table->id();
        $table->foreignId('direction_id');
        $table->string('quantity');
        $table->string('unit');
        $table->string('name');
        $table->integer('cost');
        $table->boolean('containsMeat');
        $table->boolean('containsAnimalProduct');
        $table->timestamps();
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::dropIfExists('ingredients');
  }
}
