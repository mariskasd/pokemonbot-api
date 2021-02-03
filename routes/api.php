<?php

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

Route::prefix('pokemon')->group(function () {
    Route::post('/register', 'App\Http\Controllers\UserController@register');
    Route::get('/user', 'App\Http\Controllers\UserController@getUser');
});
