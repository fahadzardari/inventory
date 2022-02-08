<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//Login routes
Route::get('/', [LoginController::class , 'index']);
Route::post('/login', [LoginController::class , 'login']);
Route::get('/logout' , [LoginController::class , 'logout']);


//User routes
Route::get('/user', [UserController::class , 'index'])->middleware('HasRole:user');
Route::get('/user/list', [UserController::class , 'list'])->middleware('HasRole:user');


//admin routes
Route::get('/admin',[AdminController::class , 'index'])->middleware('HasRole:admin');