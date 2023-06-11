<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\galeriwebController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\webController;
use App\Http\Middleware\isLogin;
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

Route::get('/profil', function () {
    return view('compro.profil');
});

Route::get('/visi', function () {
    return view('compro.visi');
});

Route::get('/fasilitas', function () {
    return view('compro.fasilitas');
});

Route::get('/deblog', function () {
    return view('compro.deblog');
});


Route::get('/kontak', function () {
    return view('compro.kontak');
});

Route::resource('web', webController::class);
Route::resource('pengajar', pengajarController::class);
Route::resource('bloger', blogController::class);
Route::get('detail-blog/{artikel}', [blogController::class, 'detail'])->name('detail-blog');
Route::post('detail-blog/{artikel}/comments', [CommentsController::class, 'store']);
Route::resource('galeriweb', galeriwebController::class);

Route::resource('home', homeController::class)->middleware('isLogin');

Route::resource('artikel', artikelController::class)->middleware('isLogin');
Route::resource('category', categoryController::class)->middleware('isLogin');
Route::resource('kegiatan', kegiatanController::class)->middleware('isLogin');
Route::resource('staff', staffController::class)->middleware('isLogin');
Route::resource('galeri', galeriController::class)->middleware('isLogin');

Route::get('/sesi', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isTamu');