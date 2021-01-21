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
    $contents  = DB::table('contents')->get();
    return view('index', ['contents'=>$contents]);
});
route::get('/tentang', function () {
    return view('/homepage/tentang');
});
route::get('/article', function () {
    return view('/homepage/article');
});

Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::delete('/tag/destroyAll', 'TagController@destroyAll');
        Route::resource('/tag', 'TagController')->except([
      'create', 'edit'
    ]);
        Route::resource('/konten', 'KontenController')->except([
      'show'
    ]);
        Route::resource('/', 'DashboardController')->only([
      'index'
    ]);
    });
});

require __DIR__.'/auth.php';
