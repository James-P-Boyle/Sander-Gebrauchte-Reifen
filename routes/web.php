<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\TireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.show');
})->name('home');

Route::get('/privacy', function () {
    return view('pages.privacy-policy');
})->name('privacy');

Route::resource('/tire', TireController::class);

Route::post('/email', [EmailController::class, 'send'])->name('email');
