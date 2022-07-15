<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    // Common resource routes:
    // index - show all listings
    // show - show single listing
    // create - show form to create new listing
    // store - store new listing
    // edit - show form to edit listing
    // update - update listing
    // destroy - delete listing

    public function index()
    {
        return view('recipes.index', [
            'recipes' => Recipe::all(),
        ]);
    }

    public function show (Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    public function create()
    {
    }
}
