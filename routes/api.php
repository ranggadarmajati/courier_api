<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\InternationalDestinationController;
use App\Http\Controllers\InternationalOriginController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\SubdistrictController;
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

Route::group(['middleware' => 'clientkey'], function () {
    // province route
    Route::group(['prefix' => 'province', 'as' => 'province.'], function () {
        Route::get('/', [ProvinceController::class, 'index']);
        Route::get('/{id}', [ProvinceController::class, 'show']);
    });

    // city route
    Route::group(['prefix' => 'city', 'as' => 'city.'], function () {
        Route::get('/', [CityController::class, 'index']);
        Route::get('/{id}', [CityController::class, 'show']);
    });

    // subdistrict route
    Route::group(['prefix' => 'subdistrict', 'as' => 'subdistrict.'], function () {
        Route::get('/', [SubdistrictController::class, 'index']);
        Route::get('/{id}', [SubdistrictController::class, 'show']);
    });

    // cost route
    Route::group(['prefix' => 'cost', 'as' => 'cost.'], function () {
        Route::get('/', [CostController::class, 'index']);
        Route::get('/international', [CostController::class, 'internationalCost']);
        Route::get('/currency', [CostController::class, 'currency']);
    });

    // international origin route
    Route::group(['prefix' => 'internationalorigin', 'as' => 'internationalorigin.'], function () {
        Route::get('/', [InternationalOriginController::class, 'index']);
    });

    // international destination route
    Route::group(['prefix' => 'internationaldestination', 'as' => 'internationaldestination.'], function () {
        Route::get('/', [InternationalDestinationController::class, 'index']);
    });
});
