<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/form', function () {
    return view('form');
})->name('form.show');

Route::post('/form', [FormController::class, 'store'])->name('form.submit');

// Display the team page
Route::get('/team', [TeamMemberController::class, 'index'])->name('team');


Route::post('/team/store', [TeamMemberController::class, 'store'])->name('team.store');

// Dashboad routes

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);

// Blog routes

Route::get('/blog', [BlogController::class, 'index'])->name('blog');