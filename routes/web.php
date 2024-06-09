<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserChallengeSolutionController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolverController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/user', function () {
    return view('home-user');
});

Route::get('/challenge', function () {
    return view('all-challenge');
});

Route::get('/board', function () {
    return view('board-user');
});

Route::get('/profile', function () {
    return view('profile-user');
});


Route::get('/setting', function () {
    return view('settings-user');
});

Route::get('/support', function () {
    return view('support-user');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/scoreboard', function () {
    return view('scoreboard-user');
});

Route::get('/detail-chall', function () {
    return view('test-user');
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin-user', function () {
    return view('admin-users');
});

Route::get('/admin-add-user', function () {
    return view('admin-add-user');
});

Route::get('/admin-challenge', function () {
    return view('admin-challenge');
});

Route::get('/admin-add-challenge', function () {
    return view('admin-add-challenge');
});

Route::get('/solved', function () {
    return view('admin-solved');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('Registration');
});

Route::get('/setting-admin', function () {
    return view('admin-setting');
});

Route::get('/scoreboard', [ChallengeController::class, 'getRanking'])->name('scoreboard');

Route::get('/views', [UserChallengeSolutionController::class, 'showSolutions'])->name('solutions');
require __DIR__.'/auth.php';

use App\Http\Controllers\AdminChallengeController;

Route::get('/admin-challenge', [AdminChallengeController::class, 'index'])->name('admin-challenge.index');
Route::delete('/admin-challenge/{id}', [AdminChallengeController::class, 'destroy'])->name('admin-challenge.destroy');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/detail-chall', [SolverController::class, 'index']); //buat detail challenge

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user');