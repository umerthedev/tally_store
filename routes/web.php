<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopOwnerController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Customers Routes
Route::get('/showusers',[AdminController::class, 'showusers']);
Route::get('/delete_user/{id}',[AdminController::class, 'delete_user']);

//Shop Owner Routes
Route::get('/showshop',[AdminController::class,'shopowner']);
Route::get('/delete_shopowner/{id}',[AdminController::class,'delete_shopowner']);

//add shop info
Route::get('/add_shopinfo',[ShopOwnerController::class,'add_shopinfo']);

//category routes
Route::get('/add_category',[AdminController::class,'add_category']);
//save category
Route::post('/save_category',[AdminController::class,'save_category']);



Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);

