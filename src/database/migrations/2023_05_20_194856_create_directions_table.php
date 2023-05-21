<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('directions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('recipe_id')->constrained()->onDelete('cascade');
        $table->integer('stepNumber');
        $table->text('stepDescription');
        $table->integer('stepTime');
        $table->string('stepImage');
        $table->boolean('stepCompleted');
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
    Schema::dropIfExists('directions');
  }
}
