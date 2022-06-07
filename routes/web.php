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
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);



//User routes
Route::group(['middleware' => ['HasRole:user']], function () {
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/list/{id}', [UserController::class, 'list'])->where('id' , '[0-9]+');
Route::get('/user/add', [UserController::class, 'add']);
Route::get('/user/addcategory', [UserController::class, 'addCategory']);
Route::post('/user/addcategory', [UserController::class, 'addCategoryPost']);
Route::post('/user/additem', [UserController::class, 'addItem']);
Route::post('/user/list/delete/{type_of_item}/{id}', [UserController::class, 'deleteItem'])->where(['id' , '[0-9]+'] , ['type_of_item' , '[0-9]+']);
Route::post('/user/list/increment/{id}', [UserController::class, 'increment'])->where('id' , '[0-9]+');
Route::post('/user/list/decrement/{id}', [UserController::class, 'decrement'])->where('id' , '[0-9]+');

    //
});




//admin routes
Route::get('/admin', [AdminController::class, 'index'])->middleware('HasRole:admin');
