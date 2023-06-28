<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Meals;

class Category extends Model
{
    use HasFactory;

    protected $table = ['category'];
    protected $fillable = ['title', 'slug'];

    public function meals() : BelongsTo
    {
        return $this->belongsTo(Meals::class);
    }
}
