<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return Restaurant::orderBy('name')->get();
    }

    public function show($restaurant)
    {
        return $restaurant;
    }

    public function store(Request $request)
    {
        $restaurant = Restaurant::create($request->all());

        return response()->json($restaurant, 201);
    }
}
