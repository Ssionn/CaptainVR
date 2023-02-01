<?php

use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vr-coaches', [HomeController::class, 'vr_coaches'])->name('vr_coaches');
Route::get('/vr-coaches/{name}', [HomeController::class, 'vr_show'])->name('vr_coaches.show');
Route::get('/metaverse-coaches', [HomeController::class, 'metaverse_coaches'])->name('metaverse_coaches');
Route::get('/metaverse-coaches/{name}', [HomeController::class, 'meta_show'])->name('metaverse_coaches.show');
Route::get('/xr-academy', [HomeController::class, 'xr_academy'])->name('xr_academy');
Route::get('/xr-products', [HomeController::class, 'xr_products'])->name('xr_products');
Route::get('/sail-along', [HomeController::class, 'sail_along'])->name('sail_along');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


