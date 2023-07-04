<?php

use App\Http\Controllers\MealsController;
use App\Models\Meals;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MealsController::class, 'view']);

Route::get('/meals/all', [MealsController::class, 'index'] );

Route::get('/meals', [MealsController::class, 'meals']);
Route::get('/category', [MealsController::class, 'category']);
Route::get('/tags', [MealsController::class, 'tags']);
Route::get('/ingredients', [MealsController::class, 'ingredients']);

