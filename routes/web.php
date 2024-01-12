<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorPageController;
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

Route::get('/', [VisitorPageController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Auth::routes();
Route::post('logout', [ProfileController::class, 'logout'])->name('logout');
Route::get('{page}', [App\Http\Controllers\PageController::class, 'index']);


