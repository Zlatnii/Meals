<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meals;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tags extends Model
{
    use HasFactory;

    protected $table = ['tags'];
    protected $fillable = ['title', 'slug'];
    
    public function meals()
    {
        return $this->hasMany(Meals::class);
    }
}
