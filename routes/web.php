<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KomentarController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/home', HomeController::class)->name('home');

Route::get('guru', GuruController::class)->name('guru.index');

Route::get('galeri', GaleriController::class)->name('galeri.index');

Route::get('ekskul', EkskulController::class)->name('ekskul.index');

Route::get('kontak', KontakController::class)->name('kontak.index');

Route::resource('berita', BeritaController::class)->only(['index', 'show']);


Route::get('page/{slug}', PageController::class)->name('page');

Route::post('/berita', [KomentarController::class,'store'])->name('store');
