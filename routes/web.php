<?php

use App\Http\Controllers\HanggaraController;
use App\Http\Controllers\GekyaController;
use App\Http\Controllers\AnonimController;
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

Route::get('/hanggara', [HanggaraController::class, 'index'])->name('profiles.hanggara');
Route::get('/gekya', [GekyaController::class, 'index'])->name('profiles.gekya');
Route::get('/anonim', [AnonimController::class, 'index'])->name('profiles.anonim');
