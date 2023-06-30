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
use Illuminate\Database\Eloquent\Relations\HasOne;

class Meals extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];
    protected $hidden = ['created_at', 'updated_at', 'delete_at', 'category_id', 'tags_id', 'ingredients_id'];

    // Create relationship belongs to Category
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Create relationships hasMany Tags, Ingredients, and Languages
    public function tags()
    {
        return $this->belongsTo(Tags::class);
    }

    public function ingredients()
    {
        return $this->belongsTo(Ingredients::class);
    }

    public function languages()
    {
        return $this->belongsTo(Languages::class);
    }
}
