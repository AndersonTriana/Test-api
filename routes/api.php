<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Persona;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



 
Route::get('personas', 'PersonaController@index');
Route::get('personas/{id}', 'PersonaController@show');
Route::post('personas', 'PersonaController@store');
Route::put('personas/{id}', 'PersonaController@update');
Route::delete('personas/{id}', 'PersonaController@delete');