<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'foods';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Food::class, 'user_food', 'food_id', 'user_id');
    }
}
