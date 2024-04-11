<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BoatController::class, 'index']);

Route::get('/boats', [BoatController::class, 'index']);

Route::get('/boats', [BoatController::class, 'showBoats'])->name('boats.index');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/detailpage', [DetailPageController::class, 'show'])->name('detailpage');



Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');






Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
