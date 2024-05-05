<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::get('/travel-blog', [App\Http\Controllers\TravelBlogController::class, 'index'])->name('travel-blog');
Route::get('/paket/{id?}', [App\Http\Controllers\PaketWisataController::class, 'index'])->name('paket');
Route::get('/details/{id?}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');

