<?php

use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin', [BukuController::class, 'index']
// )->middleware(['auth', 'role:admin'])->name('admin.index');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin', [BukuController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [BukuController::class, 'create'])->name('admin.create');
    Route::post('admin', [BukuController::class, 'store'])->name('admin.store');
    Route::get('admin/{buku}/edit', [BukuController::class, 'edit'])->name('admin.edit');
    Route::put('admin/{buku}', [BukuController::class, 'update'])->name('admin.update');
    Route::delete('admin/{buku}', [BukuController::class, 'destroy'])->name('admin.destroy');
});

Route::get('/borrow', [BorrowController::class, 'index'])->name('user.borrow');

Route::middleware(['auth', 'role:user'])->group(function(){

} );

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
