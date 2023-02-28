<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware(['admin', 'auth']);
Route::get('/rent-logs', [AdminController::class, 'rentLogs'])->name('rentLogs')->middleware(['admin', 'auth']);

//route category
Route::get('/categories', [AdminController::class, 'categories'])->name('categories')->middleware(['admin', 'auth']);
Route::get('/addCategory', [CategoryController::class, 'addCategory'])->name('addCategory')->middleware(['admin', 'auth']);
Route::post('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('deleteCategory');
 
//route user
Route::get('/home', [UserController::class, 'home'])->name('home')->middleware('user');

//route users
Route::get('/users', [AdminController::class, 'users'])->name('users')->middleware(['admin', 'auth']);
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser')->middleware(['admin', 'auth']);
Route::post('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');

//route book
Route::get('/books', [AdminController::class, 'books'])->name('books')->middleware(['admin', 'auth']);
Route::get('/addBook', [BookController::class, 'addBook'])->name('addBook')->middleware(['admin', 'auth']);
Route::post('/createBook', [BookController::class, 'createBook'])->name('createBook');
Route::get('/editBook/{id}', [BookController::class, 'editBook'])->name('editBook')->middleware(['admin', 'auth']);;
Route::post('/updateBook/{id}', [BookController::class, 'updateBook'])->name('updateBook');
Route::post('/deleteBook/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');

  
//route message
Route::post('/storeMessage', [MessageController::class, 'storeMessage'])->name('storeMessage');
//route register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/storeRegister', [RegisterController::class, 'register'])->name('storeRegister');
//route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/storeLogin', [LoginController::class, 'login'])->name('storeLogin');
//route logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
