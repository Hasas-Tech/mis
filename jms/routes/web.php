<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\roleController;
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


Route::get('/', [dashboardController::class, 'dashboard'])->name('/');
Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

///////////////// User Route //////////////////////////////////////
Route::resource('users', UserController::class);
Route::get('edit/{users}/edit', [UserController::class, 'edit'])->name('users.edit');

///////////////// Role Route //////////////////////////////////////
Route::get('roles', [RoleController::class, 'index']);
Route::post('roles', [RoleController::class, 'store']);
Route::delete('roles/{role}', [RoleController::class, 'destroy']);

///////////////// Product Route Group //////////////////////////////////
Route::prefix('products')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/', [ProductController::class, 'store']);
    Route::get('/edit/{product}', [ProductController::class, 'edit']);
    Route::put('/edit/{product}', [ProductController::class, 'update']);
    Route::delete('/delete/{product}', [ProductController::class, 'destroy']);
});
