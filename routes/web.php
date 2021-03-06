<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiderController;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/tracks/delete', [\App\Http\Controllers\TrackController::class, 'deleteView']);

Route::resource('blogs', \App\Http\Controllers\BlogController::class);

Route::resource('riders', RiderController::class);

Route::resource('tracks', \App\Http\Controllers\TrackController::class);

Route::resource('races', \App\Http\Controllers\RaceController::class);

