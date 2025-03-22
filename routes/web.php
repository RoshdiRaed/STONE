<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CategoryController;


use Symfony\Component\HttpKernel\Profiler\Profile;

// Home route
Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

// About route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Form routes
Route::get('/form', function () {
    return view('form');
})->name('form.show');

Route::post('/form', [FormController::class, 'store'])->name('form.submit');

// Team routes
Route::get('/team', [TeamMemberController::class, 'index'])->name('team');
Route::post('/team/store', [TeamMemberController::class, 'store'])->name('team.store');

// Dashboard routes
// Route::get('/articles', [DashboardController::class, 'index'])->name('articles');

// Blog route
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Article routes
Route::get('/create-post', [ArticleController::class, 'create'])->middleware('auth')->name('create-post');
Route::post('/create-post', [ArticleController::class, 'store'])->middleware('auth');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth')->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->middleware('auth')->name('articles.update');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->middleware('auth')->name('articles.destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


// Pro
Route::get('/pro-form', function () {
    return view('pro');
});

// Rooms

Route::get('/room/home', [RoomController::class, 'home'])->name('room');

Route::get('/room/projects', function () {
    return view('room.project');
});

Route::get('/room/chat', function () {
    return view('room.chat');
})->name('room.chat');

// Authentication routes
require __DIR__ . '/auth.php';
