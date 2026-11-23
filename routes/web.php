<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/hanggara', 'hanggara')->name('profiles.hanggara');
    Route::get('/gekya', 'gekya')->name('profiles.gekya');
    Route::get('/anonim', 'anonim')->name('profiles.anonim');
});
