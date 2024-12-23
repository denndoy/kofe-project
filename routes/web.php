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
Route::get('/my_cart', [HomeController::class, 'my_cart']);
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::post('/confirm_order', [HomeController::class, 'confirm_order']);
Route::get('/orders', [AdminController::class, 'orders']);
Route::get('/on_the_way/{id}', [AdminController::class, 'on_the_way']);
Route::get('/delivered/{id}', [AdminController::class, 'delivered']);
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);
Route::post('/book_table', [HomeController::class, 'book_table']);
Route::get('/reservations', [AdminController::class, 'reservations']);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
