<?php

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
use App\Http\Controllers\userController;
Route::get('/', function () {
    dd(session());
    return view('listings');
});
//Gets the registration page
Route::get('/register',[userController::class,'create']);
//Stores the user profile in our database
Route::post('/register',[userController::class,'store']);
//User Logout route
Route::get('/logout',[userController::class,'logout']);
// User Login route and function controller
Route::get('/login',function(){
    return view('user.login');
});
//User login validation route
Route::post('/login',[userController::class,'login'])->name('login');