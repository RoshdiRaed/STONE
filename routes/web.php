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
use Symfony\Component\HttpKernel\Profiler\Profile;


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
Route::get('/articles', [DashboardController::class, 'index']);

// Blog route
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Home route
Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');


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

// Authentication routes
require __DIR__ . '/auth.php';
