<?php

use App\Http\Controllers\listControl;

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\applicationControl;
Route::get('/', [listControl::class,'index']);
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


Route::get('/create',[listControl::class,'create']);
Route::post('/create', [listControl::class,'store']);
Route::get('/{listing}',[listControl::class,'show']);
//The route to get the edit listing form view
Route::get('/{listing}/edit',[listControl::class,'edit']);
//The route for the edit listing action
Route::put('/{listing}/edit',[listControl::class,'update']);
//The route to the deletion of a listing
Route::delete('/{listing}/delete',[listControl::class,'destroy']);
//The route to the application form
Route::get('/{listing}/apply',[applicationControl::class,'create']);

Route::post('/{listing}/apply',[applicationControl::class,'store']);