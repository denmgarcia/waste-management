<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WasteManagementController;
use App\Http\Controllers\WasteTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $driver = 58;
    $count = User::count();

    return view('dashboard', compact('driver', 'count'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/waste-collection',[WasteManagementController::class, 'index'])->middleware(['auth', 'verified'])->name('waste-collection');
Route::get('/waste-type',[WasteTypeController::class, 'index'])->middleware(['auth', 'verified'])->name('waste-type');
Route::get('/users',[UserController::class, 'index'])->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
