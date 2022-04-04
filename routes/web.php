<?php

use App\Http\Middleware\RedirectIfAuthenticated;
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
Route::get('/registro', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/registro', [AuthController::class, 'registerPost']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//Auth Google
Route::get('/auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('google-redirect');
Route::get('/auth/google/callback', [AuthController::class, 'googleCallback'])->name('google-callback');