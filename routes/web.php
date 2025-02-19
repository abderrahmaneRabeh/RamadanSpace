<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecetteController;
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

Route::get('/ExDetails/{id}', [ExperienceController::class, 'showDetails'])->name('ex_details');

Route::get('/Recettes', [RecetteController::class, 'display'])->name('Recettes');
Route::get('/recettes/details/{id}', [RecetteController::class, 'showDetails'])->name('re_details');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
;


Route::get(
    '/Experiences',
    [ExperienceController::class, 'display'],
)->name('Experiences');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/experience/create', [ExperienceController::class, 'index'])->name('add_experience');
Route::post('/experience/create', [ExperienceController::class, 'store']);


Route::post('/AjouterCommentaire', [CommentaireController::class, 'store'])->name('AjouterCommentaire');



Route::get('/recette/create', [RecetteController::class, 'index'])->name('add_recette');
Route::post('/recette/create', [RecetteController::class, 'store']);
