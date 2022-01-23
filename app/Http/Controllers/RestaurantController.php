<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('restaurants', ['restaurants' => $restaurants]);
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurant', ['restaurant' => $restaurant]);
    }
}
