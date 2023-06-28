<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Meals;

class MealsController extends Controller
{
    public function index() 
    {
        $meals = Meals::with('category', 'tags','ingredients')->paginate(5);

        return $meals;
    }
}
