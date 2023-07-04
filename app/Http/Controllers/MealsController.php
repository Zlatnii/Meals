<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Meals;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Tags;
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
        $var = Meals::all();
        return $var;
    }

    public function category()
    {
        $var = Category::all();
        return $var;
    }

    public function tags()
    {
        $var = Tags::all();
        return $var;
    }

    public function ingredients()
    {
        $var = Ingredients::all();
        return $var;
    }
}
