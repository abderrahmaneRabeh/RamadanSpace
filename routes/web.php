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

Route::get('/', function () {
    return view('Home');
});


Route::get('/ExDetails', function () {
    return view('experienceDetails');
});

Route::get('/Recettes', function () {
    return view('Recettes');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', action: function () {
    return view('register');
});

Route::get('/Experiences', action: function () {
    return view('Experiences');
});

