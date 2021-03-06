<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('api');
});

Route::get('/docs', function () {
    return view('docs');
});


Route::get('/reset', 'ManageController@reset');
Route::get('/reset/{name}', 'ManageController@resetByName');