<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

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

Route::resource('coba', CobaController::class);
Route::get('/spec1a', 'App\Http\Controllers\CobaController@spec1a');
Route::get('/spec1b', 'App\Http\Controllers\CobaController@spec1b');
Route::get('/spec2', 'App\Http\Controllers\CobaController@spec2');
Route::get('/spec3', 'App\Http\Controllers\CobaController@spec3');
Route::get('/spec4', 'App\Http\Controllers\CobaController@spec4');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
