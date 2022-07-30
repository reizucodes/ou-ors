<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//TRY

/*
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

*/

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    //sample route
    Route::get('/hello', [App\Http\Controllers\Admin\DashboardController::class, 'hello'])->name('hello');
});

Route::group(['as' => 'registrar.', 'prefix' => 'registrar', 'namespace' => 'Registrar', 'middleware' => ['auth', 'registrar']], function () {
    Route::get('/home', [App\Http\Controllers\Registrar\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'dean.', 'prefix' => 'dean', 'namespace' => 'Dean', 'middleware' => ['auth', 'dean']], function () {
    Route::get('/home', [App\Http\Controllers\Dean\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'adviser.', 'prefix' => 'adviser', 'namespace' => 'Adviser', 'middleware' => ['auth', 'adviser']], function () {
    Route::get('/home', [App\Http\Controllers\Adviser\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'applicant.', 'namespace' => 'Applicant', 'middleware' => ['auth', 'applicant']], function () {
    Route::get('/home', [App\Http\Controllers\Applicant\DashboardController::class, 'index'])->name('dashboard');
});


/*
Route::group(['middleware' => ['applicant']], function () {
    Route::get('/home', [App\Http\Controllers\Applicant\DashboardController::class, 'index']);
});
*/