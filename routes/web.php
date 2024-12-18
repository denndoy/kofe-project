<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'my_home']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/add_coffee', [AdminController::class, 'add_coffee']);
Route::post('/upload_coffee', [AdminController::class, 'upload_coffee']);
Route::get('/view_coffee', [AdminController::class, 'view_coffee']);
Route::get('/delete_coffee/{id}', [AdminController::class, 'delete_coffee']);
Route::get('/update_coffee/{id}', [AdminController::class, 'update_coffee']);
Route::post('/edit_coffee/{id}', [AdminController::class, 'edit_coffee']);
Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
