<?php

use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-user',[UserController::class,'insertRecord']);

Route::get('get-phone/{id}',[UserController::class,'fetchPhoneByUser']);

Route::get('/add-post',[PostController::class,'addPost']);

Route::get('add-comment/{id}',[PostController::class,'addComment']);

Route::get('/get-comments/{id}',[PostController::class,'getCommentsByPost']);

Route::get('/add-roles',[RoleController::class,'addRole']);

Route::get('/add-users',[RoleController::class,'addUser']);

Route::get('/rolesbyuser/{id}',[RoleController::class,'getAllRolesByUser']);

Route::get('/usersbyrole/{id}',[RoleController::class,'getAllUsersByRole']);

Route::get('/home',[FrontpageController::class,'home']);
Route::post('/orders', [OrderController::class, 'store']);
