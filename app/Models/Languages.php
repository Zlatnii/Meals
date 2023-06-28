<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Meals;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Ingredients;

class Languages extends Model
{
    use HasFactory;
    
    protected $table = ['languages'];

    public function meals() : HasMany
    {
        return $this->hasMany(Meals::class);
    }

    public function category() : HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function tags() : HasMany
    {
        return $this->hasMany(Tags::class);
    } 
    
    public function ingredients() : HasMany
    {
        return $this->hasMany(Ingredients::class);
    }

}