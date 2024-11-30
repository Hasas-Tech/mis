<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
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
Route::get('/userLogin', [userController::class, 'userLogin'])->name('userLogin');
Route::get('/addUser', [userController::class, 'addUser'])->name('admin.pages.users.addUser');
Route::get('/allUsers', [userController::class, 'allUsers'])->name('admin.pages.users.allUsers');
Route::get('/allRole', [roleController::class, 'allRole'])->name('admin.pages.users.allRole');
Route::get('/addRole', [roleController::class, 'addRole'])->name('admin.pages.users.addRole');
Route::post('/addRole', [roleController::class, 'storeRole'])->name('admin.pages.users.addRole');

