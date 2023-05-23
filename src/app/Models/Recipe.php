<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;
use App\Models\Ingredient;
use App\Models\Tag;

class Recipe extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, function ($query, $search) {
        $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%');
    })->when($filters['tag'] ?? false, function ($query, $tag) {
        $query->whereHas('tags', function ($query) use ($tag) {
            $query->where('slug', $tag);
        });
    });
  }

  public function directions()
  {
    return $this->hasMany(Direction::class);
  }

  public function ingredients()
  {
    return $this->hasManyThrough(Ingredient::class, Direction::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }
}
