<?php

use App\Models\Listing;

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
use App\Http\Controllers\listControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\applicationControl;
use App\Models\User;
use Illuminate\Http\Request;
Route::get('/check',function(){
    return response()->json([User::all()]);
});
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

//shows all available jobs
Route::get('/listings',function(){
    return view('joblists',[
        'list'=>Listing::latest()->filter(request(['tag', 'search']))->paginate(10)
    ]);
})->middleware('auth');


Route::middleware(['auth'])->group(function(){
//Manage all user listings
Route::get('/manage',function(){
 
    return view('manage',[
        'listings'=>auth()->user()->listing
    ]);
});
Route::controller(applicationControl::class)->group(function(){

Route::get('/applications','index');
//Route To view application data 
Route::get('/applications/{application}','show');
//Route to accept the application
Route::post('/applications/{application}/accept','accept');
//Route to reject the application
Route::delete('/applications/{application}/reject','reject');
//The route to the application form
Route::get('/{listing}/apply','create');
//Route to post user application data to database
Route::post('/{listing}/apply','store');
});

Route::controller(listControl::class)->group(function(){
//The route to get the listing creation form
Route::get('/create','create');
//The route to create a job listing
Route::post('/create', 'store');
//The route to get an individual listing
Route::get('/{listing}','show');
//The route to get the edit listing form view
Route::get('/{listing}/edit','edit');
//The route for the edit listing action
Route::put('/{listing}/edit','update');
//The route to the deletion of a listing
Route::delete('/{listing}/delete','destroy');
}); 
});
