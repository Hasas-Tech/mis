<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');
Route::get('/addUser', [adminController::class, 'addUser'])->name('admin.pages.users.addUser');
Route::get('/allUsers', [adminController::class, 'allUsers'])->name('admin.pages.users.allUsers');
Route::get('/allRole', [adminController::class, 'allRole'])->name('admin.pages.users.allRole');
Route::get('/addRole', [adminController::class, 'addRole'])->name('admin.pages.users.addRole');
