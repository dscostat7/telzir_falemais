<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelzirController;

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

Route::get('/', [TelzirController::class, 'index'])->name('home');
Route::get('/about', [TelzirController::class, 'about'])->name('about');
Route::get('/fale-mais-30', [TelzirController::class, 'faleMais30'])->name('faleMais30');
Route::get('/fale-mais-60', [TelzirController::class, 'faleMais60'])->name('faleMais60');
Route::get('/fale-mais-120', [TelzirController::class, 'faleMais120'])->name('faleMais120');
Route::get('/calcule', [TelzirController::class, 'calculo'])->name('calculo');




