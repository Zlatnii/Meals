<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Meals;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MealsController extends Controller
{
    public function index() 
    {

        $meals = Meals::with('category', 'tags','ingredients')->get();
        return $meals;
       
    }
}
