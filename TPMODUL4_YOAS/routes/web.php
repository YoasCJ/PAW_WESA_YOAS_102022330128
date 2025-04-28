<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get(uri: '/', action: function (): mixed {
    return view(view: 'welcome');
});

// 1. Tambahkan route untuk menampilkan daftar pengguna
Route::get(uri: '/users/index', action: [UserController::class, 'index'])->name('users.index');

// 2. Tambahkan route untuk menampilkan form tambah pengguna
Route::get(uri: '/users/create', action: [UserController::class, 'create'])->name('users.create');

// 3. Tambahkan route untuk menyimpan pengguna baru
Route::post(uri: '/users/create', action: [UserController::class, 'store'])->name('users.store');

// 4. Tambahkan route untuk menampilkan form edit pengguna
Route::get(uri: '/users/{user}/edit', action: [UserController::class, 'edit'])->name('users.edit');

// 5. Tambahkan route untuk menyimpan perubahan pengguna
Route::put(uri: '/users/{user}', action: [UserController::class, 'update'])->name('users.update');

// 6. Tambahkan route untuk menghapus pengguna
Route::delete(uri: '/users/{id}', action: [UserController::class, 'destroy'])->name('users.destroy');
