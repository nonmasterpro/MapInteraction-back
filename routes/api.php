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

// Route::group([
// 'middleware' => 'jwt.auth',
// 'prefix' => 'places'
// ], function () {
//     Route::get('/', 'Api\PlaceController@index');
//     Route::post('/', 'Api\PlaceController@store');
//     Route::get('/{place}', 'Api\PlaceController@show');
// });

Route::resource('places', 'PlaceController', [
    'middleware' => 'jwt.auth'
]);

Route::post('auth', 'Api\AuthController@authenticate');
// Route::get('auth/me', 'Api\AuthController@getAuthenticatedUser');