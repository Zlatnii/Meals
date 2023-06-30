<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meals;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at', 'delete_at', 'category_id', 'tags_id', 'ingredients_id'];


    public function meals() : HasOne
    {
        return $this->hasOne(Meals::class);
    }
}
