<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\StaticPagesController;
//use App\Http\Middleware\RedirectIfAuthenticated;


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

/*
|
| Set up locale if first segment
| of route matches one of our languages
*/

if (in_array(Request::segment(1), config('langs'))) {
	app()->setLocale(Request::segment(1));
}

/*
|
| If no locale is set we set to default
*/
Route::get('/', function () {
	return redirect(app()->getLocale());
});

/*
|
| Loop through available languages
| and create lang routes
*/
foreach (config('langs') as $lang) {
	Route::group(['prefix' => $lang], function () use ($lang) {
		// Home
		Route::get('/', [StaticPagesController::class, 'home'])->name($lang . '.home');

		// Team
		Route::get(__('routes.url.team.andy', [], $lang), [StaticPagesController::class, 'andy'])->name($lang . '.team.andy');
		Route::get(__('routes.url.team.lore', [], $lang), [StaticPagesController::class, 'lore'])->name($lang . '.team.lore');
		Route::get(__('routes.url.team.ariel', [], $lang), [StaticPagesController::class, 'ariel'])->name($lang . '.team.ariel');

		// Catalogue
		Route::get(__('routes.url.catalogue-wholesale', [], $lang), [CatalogueController::class, 'indexWholeSale'])->name($lang . '.catalogue-wholesale');

		// Contact Us
		Route::get(__('routes.url.contact', [], $lang), [StaticPagesController::class, 'contact'])->name($lang . '.contact');
		Route::post(__('routes.url.contact', [], $lang), [StaticPagesController::class, 'contactPost']);

		// Register
		Route::get(__('routes.url.register', [], $lang), [AuthController::class, 'register'])->name($lang . '.register')->middleware('guest');
		Route::post(__('routes.url.register', [], $lang), [AuthController::class, 'registerPost']);

		// Login
		Route::get(__('routes.url.login', [], $lang), [AuthController::class, 'login'])->name($lang . '.login')->middleware('guest');
		Route::post(__('routes.url.login', [], $lang), [AuthController::class, 'loginPost']);

		// Logout
		Route::get(__('routes.url.logout', [], $lang), [AuthController::class, 'logout'])->name($lang . '.logout')->middleware('auth');
	});
}

/*
|
| Social Auth
*/
Route::get('/auth/{social}/redirect', [AuthController::class, 'socialRedirect'])->name('social-redirect');
Route::get('/auth/{social}/callback', [AuthController::class, 'socialCallback'])->name('social-callback');
