<?php

use App\Http\Controllers\StaticPagesController;
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


// Route::controller(StaticPagesController::class)->group(function () {
//     Route::get('/', 'home')->name('home');
//     Route::post('/equipo/andy', 'andy')->name('andy');
// });

Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('/equipo/andres-charpentier', [StaticPagesController::class, 'andy'])->name('andy');
Route::get('/equipo/lorenzo-wynberg', [StaticPagesController::class, 'lore'])->name('lore');
Route::get('/equipo/dasha-montcalm', [StaticPagesController::class, 'dasha'])->name('dasha');
