<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controller\UserController;

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

// Route::get('/', function () {
//     return view('index', ['contents'=>$contents]);
// });
route::get('/', 'HomepageController@display');

route::get('/tentang', function () {
    return view('/homepage/tentang');
});

route::get('/kontak', function () {
    return view('/homepage/contact');
});

Route::get('/search','HomepageController@search');

route::get('/kode-etik', function () {
    return view('/homepage/ethic');
});

Route::get('/article/{id}', 'HomepageController@show')->name('homepage.show');


Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::delete('/tag/destroyAll', 'TagController@destroyAll')->name('tag.destroyAll');
        Route::resource('/tag', 'TagController')->except([
      'create', 'edit'
    ]);
        Route::resource('/konten', 'KontenController')->except([
      'show'
    ]);
        Route::resource('/', 'DashboardController')->only([
      'index'
    ]);

        Route::get('/user','UserController@index');
        Route::get('/user/create','UserController@create');
        Route::post('/user/store','UserController@store')->name('user.store');
        Route::get('/user/delete/{id}','UserController@delete');

        Route::get('/user/{id}', 'UserController@profil')->name('user.profil');

        Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
        Route::put('/user/{id}', 'UserController@update')->name('user.update');

        Route::get('/user/password/{id}/edit', 'UserController@passwordEdit')->name('password.edit');
        Route::put('/user/password/{id}', 'UserController@passwordUpdate')->name('update.password');
    });
   
});

require __DIR__.'/auth.php';
