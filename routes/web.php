<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}',[App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}',[App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{order}/edit',[App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}',[App\Http\Controllers\OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{order}',[App\Http\Controllers\OrderController::class, 'destroy'])->name('orders.delete');

