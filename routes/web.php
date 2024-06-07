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

// App Routes

Route::get('/dashboard', 'DashboardController@show')->name('dashboard');

// Users
Route::get('/users', 'UserController@index')->name('user.index');
Route::get('/users/create', 'UserController@create')->name('user.create');
Route::post('/users/create', 'UserController@store')->name('user.store');
Route::get('/users/{user}', 'UserController@edit')->name('user.edit');
Route::patch('/users/{user}', 'UserController@update')->name('user.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('user.destroy');

// Profile
Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile', 'ProfileController@update')->name('profile.update');
