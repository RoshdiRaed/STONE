<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TeamMemberController;


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
