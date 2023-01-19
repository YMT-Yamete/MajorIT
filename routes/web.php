<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
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

// Main Page
Route::get('/', function () {
    return view('index');
});

// Catelogue Page
Route::get('/catalogues', function () {
    return view('catalogue');
});

// Auth
Route::get('/signin', [AuthController::class, 'showSigninPage']);
Route::get('/signup', [AuthController::class, 'showSignupPage']);
Route::post('/signin', [AuthController::class, 'signin']);      

// Quiz
Route::get('/quizzes', [QuizController::class, 'showQuizPage']);

// Result
Route::get('/results/{id}', [ResultController::class, 'showResult']);

// Profile
Route::get('/users/{id}', [UserController::class, 'viewUser']);
Route::get('/users/{id}/edit', [UserController::class, 'editUser']);

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});
