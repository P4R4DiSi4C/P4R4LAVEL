<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [RestaurantController::class, 'index'])->name('accueil');
Route::post('/restaurant', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurant/{restaurant}', [RestaurantController::class, 'show'])->whereNumber('id')->name('restaurant.show');
