<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ProvinceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'province', 'as' => 'province.'], function () {
    Route::get('/', [ProvinceController::class, 'index']);
    Route::get('/{id}', [ProvinceController::class, 'show']);
});
Route::group(['prefix' => 'city', 'as' => 'city.'], function () {
    Route::get('/', [CityController::class, 'index']);
    Route::get('/{id}', [CityController::class, 'show']);
});
