<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']); // List all users
    Route::post('/', [UserController::class, 'store']); // Create a new user
    Route::get('/{id}', [UserController::class, 'show']); // Get a specific user
    Route::put('/{id}', [UserController::class, 'update']); // Update a specific user
    Route::delete('/{id}', [UserController::class, 'destroy']); // Delete a specific user
});
