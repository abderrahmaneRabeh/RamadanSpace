<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExperienceController;
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
})->name('home');

Route::get('/ExDetails', function () {
    return view('experienceDetails');
});

Route::get('/Recettes', function () {
    return view('Recettes');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
;


Route::get(
    '/Experiences',
    action: function () {
        return view('Experiences');
    },
)->name('Experiences');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/experience/create', [ExperienceController::class, 'index'])->name('add_experience');
Route::post('/experience/create', [ExperienceController::class, 'store']);
