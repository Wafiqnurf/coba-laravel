<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PhotoController;
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

Route::get('/', [AppController::class, 'index']);

Route::get('/berita', [App\Http\Controllers\AppController::class, 'berita']);
Route::get('/detail/{slug}', [App\Http\Controllers\AppController::class, 'detail']);

Route::get('/foto', [App\Http\Controllers\AppController::class, 'foto']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// BLOG BERITA
Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

// PHOTO KEGIATAN
Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

// Jenis
Route::get('/jenis', [JenisController::class, 'index'])->name('jenis')->middleware('auth');
Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create')->middleware('auth');
Route::post('/jenis/store', [JenisController::class, 'store'])->name('jenis.store')->middleware('auth');
Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('jenis.edit')->middleware('auth');
Route::post('/jenis/update/{id}', [JenisController::class, 'update'])->name('jenis.update')->middleware('auth');
Route::post('/jenis/destroy/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
