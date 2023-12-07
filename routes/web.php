<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/index', [SiteController::class,'home'])->name('home');

Route::get('/quadrant-1', [SiteController::class,'quadone'])->name('quadone');

Route::get('/quadrant-2', [SiteController::class,'quadtwo'])->name('quadtwo');

Route::get('/quadrant-3', [SiteController::class,'quadthree'])->name('quadthree');

Route::get('/quadrant-4', [SiteController::class,'quadfour'])->name('quadfour');





