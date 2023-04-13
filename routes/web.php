<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ImageController;
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

Route::get('/', [ImageController::class, 'index'])->name('home');

Route::post('/upload', [ImageController::class, 'store']);

Route::get('/feed', [ImageController::class, 'showFeed'])->name('feed');

Route::view('/upload', 'upload');