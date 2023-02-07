<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;

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
//route fe
Route::get('main', function(){
    return view('layouts.main');
});


Route::get('/', [BookController::class, 'index'])->name('welcome');
//route admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
Route::post('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
Route::get('/books', [AdminController::class, 'books'])->name('books');
Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
Route::get('/rent-logs', [AdminController::class, 'rentLogs'])->name('rentLogs');   
//route message
Route::post('/storeMessage', [MessageController::class, 'storeMessage'])->name('storeMessage');
//route register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/storeRegister', [RegisterController::class, 'register'])->name('storeRegister');
//route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/storeLogin', [LoginController::class, 'login'])->name('storeLogin');
//route logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
