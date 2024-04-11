<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BoatController::class, 'index']);

Route::get('/boats', [BoatController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);




Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/boats', function () {
    return view('boats');
})->name('boats.index');

Route::get('/users', function () {
    return view('users');
})->name('users.index');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
