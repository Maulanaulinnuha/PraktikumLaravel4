<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;

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

// prak 2
Route::get('/tampil1', [Controller1::class, 'tampil1']);
Route::post('/tampilkan', [Controller1::class, 'tampilkan']);
Route::view('/tampil2', 'tampil2');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tampil1', [Controller1::class, 'tampil1']);
    Route::get('/tampilkan', [Controller1::class, 'tampilkan']);
});

Route::get('/logout', [Controller1::class, 'logout']);

require __DIR__.'/auth.php';
