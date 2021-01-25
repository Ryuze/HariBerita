<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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
route::get('/cari', function () {
    return view('/homepage/search');
});
route::get('/kode-etik', function () {
    return view('/homepage/ethic');
});
route::get('/article', function () {
    return view('/homepage/article');
});


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
    });
});
Route::middleware('auth')->group(function () {
    Route::prefix('/akun')->group(function () {
        route::get('/updateakun', function () {
            return view('/akun/updateakun');
        });
    });
});

require __DIR__.'/auth.php';
