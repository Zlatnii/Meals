<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Meals;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Languages;
use App\Models\Tags;
use App\Models\Translation;
use Illuminate\Support\Facades\Response;



use Illuminate\Support\Facades\App;


class MealsController extends Controller
{
    public function index() 
    {
        $meals = Meals::with('category', 'tags','ingredients')->get();
        return $meals;
    } 
    
    public function view(Response $response)
    {
        $meals = Meals::with('category', 'tags', 'ingredients')->simplePaginate(5);
        return view('welcome', compact('meals'));
    }

    //Return by parameters
    public function meals()
    {
        $meals = Meals::all();
        return $meals;
    }

    public function category()
    {
        $category = Category::all();
        return $category;
    }

    public function tags()
    {
        $tags = Tags::all();
        return $tags;
    }

    public function ingredients()
    {
        $ingredients = Ingredients::all();
        return $ingredients;
    }

    public function translation()
    {
        $translation = Translation::with('meals', 'category','ingredients')->get();

        return response()->json($translation);
    }

    public function languages()
    {
        $languages = Languages::all();

        return response()->json($languages); 
    }
}
