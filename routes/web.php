<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserChallengeSolutionController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\ScoreboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterControllers;
use App\Http\Controllers\SolverController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminChallengeController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationUserController;
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


Route::get('/notif', function () {
    return view('admin-notification');
});

Route::get('/notifications', function () {
    return view('notification-user');
});

Route::get('/admin-new-challenge', function () {
    return view('admin-add-new-challenge');
});


Route::get('/scoreboard', [ChallengeController::class, 'getRanking'])->name('scoreboard');

Route::get('/views', [UserChallengeSolutionController::class, 'showSolutions'])->name('solutions');
require __DIR__.'/auth.php';


Route::get('/admin-challenge', [AdminChallengeController::class, 'index'])->name('admin-challenge.index');
Route::delete('/admin-challenge/{id}', [AdminChallengeController::class, 'destroy'])->name('admin-challenge.destroy');
Route::get('/admin-challenge/create', [AdminChallengeController::class, 'create'])->name('admin-challenge.create');
Route::post('/admin-challenge', [AdminChallengeController::class, 'store'])->name('admin-challenge.store');
Route::get('/solved', [AdminController::class, 'showSolvedChallenges']);
Route::post('/admin-challenge/add', [ChallengeController::class, 'store'])->name('admin-challenge.store');
Route::get('/admin-add-challenge', [ChallengeController::class, 'showChallenges']);
Route::post('/admin/store-challenge', [AdminController::class, 'storeChallenge'])->name('admin.storeChallenge');




Route::get('/register', [RegisterControllers::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterControllers::class, 'register']);

Route::get('/challenge/detail-chall', [SolverController::class, 'index']); //buat detail challenge
Route::get('/challenge', [ChallengeController::class, 'index']);
Route::get('/challenge/detail-chall/{id}', [ChallengeController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/notification', [NotificationController::class, 'index']);

Route::get('/scoreboard', [ScoreboardController::class, 'index']);

Route::get('/board', [BoardController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin-user', [AdminUserController::class, 'index'])->name('admin.user.index');


// update fix login register pake sesi nativ lol
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home-user', function () {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['username']) && $_SESSION['role'] == 0) {
        return view('home-user');
    } else {
        return redirect('/login');
    }
})->name('home-user');

Route::get('/home-admin', function () {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['username']) && $_SESSION['role'] == 1) {
        return view('dashboard');
    } else {
        return redirect('/login');
    }
})->name('home-admin');




Route::get('/notifications', [NotificationUserController::class, 'index'])->name('notifications.index');


Route::post('/admin/store-challenge', [AdminController::class, 'storeChallenge'])->name('admin.storeChallenge');

Route::get('/admin-edit-challenge/{id}', [ChallengeController::class, 'edit'])->name('admin.edit.challenge');
Route::put('/admin-update-challenge/{id}', [ChallengeController::class, 'update'])->name('admin.update.challenge');
Route::get('/home-admin', [DashboardController::class, 'index'])->name('dashboard');