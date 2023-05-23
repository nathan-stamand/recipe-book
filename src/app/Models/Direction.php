<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class Direction extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function ingredients()
  {
    return $this->hasMany(Ingredient::class);
  }
}
