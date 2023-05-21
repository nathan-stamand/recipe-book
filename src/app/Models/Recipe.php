<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;
use App\Models\Ingredient;

class Recipe extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function directions()
  {
    return $this->hasMany(Direction::class);
  }

  public function ingredients()
  {
    return $this->hasManyThrough(Ingredient::class, Direction::class);
  }
}
