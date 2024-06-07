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
// Route::get('/policy', [PolicyController::class, 'show'])->name('policy');

Route::get('/scoreboard', function () {
    return view('scoreboard-user');
});

Route::get('/test', function () {
    return view('test-user');
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

Route::get('admin-challenge', function () {
    return view('admin-challenge');
});