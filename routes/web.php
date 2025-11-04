<?php

use Illuminate\Support\Facades\Route;
Route::get('/user-index', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/user-create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/user-store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/user-show/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/user-edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/user-update/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/user-destroy/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/', function () {
    return view('welcome');
});
