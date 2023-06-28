<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Tags;
use App\Models\Languages;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meals extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];
    //Create relationship HasOne or Belongs To
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //Create relationships has many tags, ingredients and languages
    public function tags(): HasMany
    {
        return $this->hasMany(Tags::class);
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredients::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(Languages::class);
    }
}
