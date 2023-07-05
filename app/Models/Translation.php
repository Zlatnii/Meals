<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Meals;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Ingredients;
use App\Models\Language;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Translation extends Model
{
    use HasFactory;
    
    protected $table = 'translation';
    protected $fillable = ['title_hr', 'title_en'];


    public function meals() : BelongsTo
    {
        return $this->belongsTo(Meals::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags() : BelongsTo
    {
        return $this->belongsTo(Tags::class);
    } 
    
    public function ingredients() : BelongsTo
    {
        return $this->belongsTo(Ingredients::class);
    }

    public function languages() : HasMany
    {
        return $this->hasMany(Language::class);
    }

}
