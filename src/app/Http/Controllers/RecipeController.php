<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RecipeController extends Controller
{
  public function index(): View
  {
    $filteredTag = Tag::where('slug', request('tag'));
    return view('recipe.index', [
          'recipes' => Recipe::latest()->filter(request(['search', 'tag']))->paginate(6)->withQueryString(),
          'tags' => Tag::all()->sortBy('name'),
          'filteredTag' => $filteredTag->exists() ? $filteredTag->first() : null,
      ]);
  }

  public function show(String $slug): View
  {
    return view('recipe.show', [
          'recipe' => Recipe::where('slug', $slug)->firstOrFail()
      ]);
  }

  public function create(): View
  {
    return view('recipe.create');
  }

  public function store()
  {
    $attributes = [
          'title' => request('title'),
          'slug' => urlencode(request('title')),
          'description' => request('description'),
          'servingsMade' => request('servingsMade'),
          'caloriesTotal' => request('caloriesTotal'),
          'caloriesPerServing' => request('caloriesTotal') / request('servingsMade'),
          'imageMain' => request('imageMain'),
      ];
    $recipe = new Recipe($attributes);
    $recipe->save();
    return redirect('/recipes');
  }
}
