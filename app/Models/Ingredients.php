<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meals;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ingredients extends Model
{
    use HasFactory;

    protected $table = ['ingredients'];
    protected $fillable = ['title', 'slug'];
    
    public function meals() : HasMany
    {
        return $this->hasMany(Meals::class);
    }
}
