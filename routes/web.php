<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BoatController::class, 'index']);

Route::get('/boats/ownboats', [BoatController::class, 'ownboats'])->name('boats.ownboats');
Route::get('/boats', [BoatController::class, 'index']);
Route::get('/boats', [BoatController::class, 'showBoats'])->name('boats.index');
Route::get('/boats/create', [BoatController::class, 'create'])->name('boats.create');
Route::get('/boats/add', [BoatController::class, 'add'])->name('boats.add');
Route::post('/boats/save', [BoatController::class, 'save'])->name('boats.save');

Route::get('/boat/{id}', [BoatController::class, 'show'])->name('boat.show');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/detailpage', [DetailPageController::class, 'show'])->name('detailpage');

Route::get('/bookingen', [BookingController::class, 'index'])->name('bookingen.index');

Route::get('/huur/{boat}', [BookingController::class, 'huur'])->name('huur');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');


Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');









Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
