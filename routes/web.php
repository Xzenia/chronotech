<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:web'])
    ->namespace('App\Http\Controllers')
    ->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('exercises',  ExercisesController::class);
        Route::resource('flights', FlightController::class);
        Route::resource('caffeine-intake', CaffeineIntakeController::class);
        Route::resource('sleep', SleepController::class);
    });