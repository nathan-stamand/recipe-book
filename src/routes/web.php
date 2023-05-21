<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/recipes', function () {
    return view('recipe.index', [
        'recipes' => Recipe::all()
    ]);
});

Route::get('/recipes/new', function () {
    return view('recipe.create', [
        'recipes' => Recipe::all()
    ]);
});

Route::get('/recipes/{slug}', function (String $slug) {
    return view('recipe.show', [
        'recipe' => Recipe::where('slug', $slug)->firstOrFail()
    ]);
});
