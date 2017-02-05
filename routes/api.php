<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('jwt.auth');

Route::resource('users', 'UserController', [
    'middleware' => 'jwt.auth'
]);

Route::resource('places', 'PlaceController', [
    'middleware' => 'jwt.auth'
]);

Route::resource('images', 'ImageController', [
    'middleware' => 'jwt.auth'
]);

Route::post('auth', 'Api\AuthController@authenticate');
Route::get('auth/me', 'Api\AuthController@getAuthenticatedUser');
