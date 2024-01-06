<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

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


//First Page
Route::view('/', 'index');
//TO Login Page
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//Login
Route::post('/login', [UserController::class, 'authLogin'])->middleware('guest');
//Signup Page
Route::get('/auth/signup', [UserController::class, 'signup'])->middleware('guest');
//SignUp
Route::post('/auth/signup', [UserController::class, 'store'])->middleware('guest');
//Logout
Route::get('/auth/logout', [UserController::class, 'logout'])->middleware('auth');

//List
Route::get('/todo', [TodoController::class, 'index'])->middleware('auth');
