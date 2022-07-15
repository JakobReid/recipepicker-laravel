<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function ingredient()
    {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }

    public function method()
    {
        return $this->hasMany(Method::class, 'recipe_id');
    }
}
