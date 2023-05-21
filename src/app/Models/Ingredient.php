<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;

class Ingredient extends Model
{
  use HasFactory;

    protected $guarded = [];

  public function recipe()
  {
    return $this->belongsToMany(Direction::class);
  }
}
