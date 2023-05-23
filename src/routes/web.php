<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
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

Route::get('/recipes', RecipeController::class . '@index');
Route::get('/recipes/new', RecipeController::class . '@create');
Route::post('/recipes', RecipeController::class . '@store');
Route::get('/recipes/{slug}', RecipeController::class . '@show');
