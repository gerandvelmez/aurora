<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','welcome');

//Route::resource('supplier', App\Http\Controllers\ProveedorController::class)->name('route.name.for.index');
Route::get('/proveedores', [App\Http\Controllers\ProveedorController::class, 'index'])->name('supplier.index');
Route::resource('/supplier/{id}', App\Http\Controllers\ProveedorController::class);
