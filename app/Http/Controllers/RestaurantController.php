<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::orderBy('name')->get();

        return view(
            'restaurants',
            ['restaurants' => $restaurants]
        );
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view(
            'restaurant',
            ['restaurant' => $restaurant]
        );
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        /*$restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->desc = $request->desc;
        $restaurant->save();*/
        Restaurant::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => 1
        ]);
        return view('form');
    }
}
