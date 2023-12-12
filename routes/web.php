<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
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

Route::get('/dashboard', [TaskController::class,'home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// App routes

Route::get('/', [TaskController::class,'home'])->middleware(['auth', 'verified'])->name('home');

Route::get('/quadrant-1', [TaskController::class,'quadone'])->name('quadone');

Route::get('/quadrant-2', [TaskController::class,'quadtwo'])->name('quadtwo');

Route::get('/quadrant-3', [TaskController::class,'quadthree'])->name('quadthree');

Route::get('/quadrant-4', [TaskController::class,'quadfour'])->name('quadfour');

Route::get('/tips', [SiteController::class,'tips'])->name('tips');

Route::get('/evaluate', [SiteController::class,'evaluate'])->name('evaluate');

Route::get('/achieved', [SiteController::class,'achieved'])->name('achieved');

Route::get('/unachieved', [SiteController::class,'unachieved'])->name('unachieved');

Route::get('/insights', [SiteController::class,'insights'])->name('insights');

Route::get('/statistics', [SiteController::class,'statistics'])->name('statistics');

Route::post('/store',[TaskController::class,'store'])->name('store');

Route::put('/tasks/{taskId}/complete', [TaskController::class, 'updateStatus'])->name('completed');
