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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class,'home'])->name('home');

Route::get('/index', [SiteController::class,'home'])->name('home');

Route::get('/quadrant-1', [SiteController::class,'quadone'])->name('quadone');

Route::get('/quadrant-2', [SiteController::class,'quadtwo'])->name('quadtwo');

Route::get('/quadrant-3', [SiteController::class,'quadthree'])->name('quadthree');

Route::get('/tips', [SiteController::class,'tips'])->name('tips');

Route::get('/evaluate', [SiteController::class,'evaluate'])->name('evaluate');

Route::get('/achieved', [SiteController::class,'achieved'])->name('achieved');

Route::get('/unachieved', [SiteController::class,'unachieved'])->name('unachieved');

Route::get('/insights', [SiteController::class,'insights'])->name('insights');

Route::get('/statistics', [SiteController::class,'statistics'])->name('statistics');

Route::get('/quadrant-4', [SiteController::class,'quadfour'])->name('quadfour');


