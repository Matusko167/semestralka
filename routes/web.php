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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/trate', function () {
    return view('trate');
});

Route::get('/tabulka', function () {
    return view('tabulka');
});

Route::get('/kalendar', function () {
    return view('kalendar');
});

Route::resource('riders', RiderController::class);