<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::resource('/tag', 'TagController');
        Route::post('/tag/store', 'TagController@store');
        Route::get('/tag/show/{name}', 'TagController@show');
        Route::post('/tag/update/{name}', 'TagController@update');
        Route::get('/tag/destroy/{name}', 'TagController@destroy');
        Route::delete('/tag/destroyAll', 'TagController@destroyAll');
        Route::resource('/konten', 'KontenController');
        Route::resource('/', 'DashboardController');
    });
});
require __DIR__.'/auth.php';
