<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return response()->json([
        'meals' => [
            'title' => 'Naslov na HR jeziku',
            'description' => 'Opis na HR jeziku',
            'status' => 'creted',
            'category' => [
                'title' => 'Naslov na HR jeziku',
                'slug' => 'category-1',
            ],
            'tags' => [
                'title' => 'Tag na HR jeziku',
                'slug' => 'tag-1',
            ],
            'ingredients' => [
                'title' => 'Sastojak na HR jeziku',
                'slug' => 'ingredients-1',
            ]
        ]
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

