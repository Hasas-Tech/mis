<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\EmployeesController;
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

Route::resource('products', ProductController::class);

Route::resource('employees', EmployeesController::class);
