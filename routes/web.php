<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [SiteController::class,'home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// App routes

Route::get('/', [SiteController::class,'home'])->middleware(['auth', 'verified'])->name('home');

Route::get('/quadrant-1', [SiteController::class,'quadone'])->name('quadone');

Route::get('/quadrant-2', [SiteController::class,'quadtwo'])->name('quadtwo');

Route::get('/quadrant-3', [SiteController::class,'quadthree'])->name('quadthree');

Route::get('/quadrant-4', [SiteController::class,'quadfour'])->name('quadfour');

Route::get('/tips', [SiteController::class,'tips'])->name('tips');

Route::get('/evaluate', [SiteController::class,'evaluate'])->name('evaluate');

Route::get('/achieved', [SiteController::class,'achieved'])->name('achieved');

Route::get('/unachieved', [SiteController::class,'unachieved'])->name('unachieved');

Route::get('/insights', [SiteController::class,'insights'])->name('insights');

Route::get('/statistics', [SiteController::class,'statistics'])->name('statistics');

