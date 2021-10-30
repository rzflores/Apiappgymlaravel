<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

// Route::apiResource('productos','ProductosController');
Route::get('productos', 'ProductosController@index');
Route::post('productos', 'ProductosController@store');
Route::delete('productos/{id}', 'ProductosController@destroy');
Route::put('productos/{id}', 'ProductosController@update');