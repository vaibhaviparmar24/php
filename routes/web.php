<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return redirect('contact');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/block', function () {
    return redirect('login');
});
Route::get("user",[usercontroller::class,"show"]);
