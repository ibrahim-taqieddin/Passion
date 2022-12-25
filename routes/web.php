<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

// blade 

//register ruoute 
Route::post('/register-user', [userController::class, 'store']);


//register ruoute 
Route::post('/login-user', [userController::class, 'loginUser']);







Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/ranking', function () {
    return view('ranking');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/contact', function () {
    return view('contact');
});


// login 
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});



// admin
Route::get('/admin', function () {
    return view('./admin/admin');
});
