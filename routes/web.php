<?php

use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthController;
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


//Static Pages
Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('/equipo/andres-charpentier', [StaticPagesController::class, 'andy'])->name('andy');
Route::get('/equipo/lorenzo-wynberg', [StaticPagesController::class, 'lore'])->name('lore');
Route::get('/equipo/dasha-montcalm', [StaticPagesController::class, 'dasha'])->name('dasha');

//Auth
Route::any('/registro', [AuthController::class, 'register'])->name('register');
Route::any('/login', [AuthController::class, 'login'])->name('login');
