<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meals;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ingredients extends Model
{
    use HasFactory;

    protected $table = 'ingredients';
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at', 'delete_at', 'category_id', 'tags_id', 'ingredients_id'];

    
    public function meals() : HasMany
    {
        return $this->hasMany(Meals::class);
    }

    public function translation() : HasMany
    {
        return $this->hasMany(Meals::class);
    }
}
