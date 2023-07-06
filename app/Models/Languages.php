<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Meals;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Ingredients;
use App\Models\Translation;

class Languages extends Model
{
    use HasFactory;
    
    protected $table = 'languages';
    protected $fillable = ['lang'];
    protected $hidden = ['created_at', 'updated_at', 'delete_at', 'category_id', 'tags_id', 'ingredients_id'];


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

    public function translation() : HasMany
    {
        return $this->hasMany(Translation::class);
    }

}
