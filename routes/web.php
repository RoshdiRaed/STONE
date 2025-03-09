<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TeamMemberController;


Route::get('/', function () {
    return view('home');
});

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/form', [FormController::class, 'index'])->name('form');

Route::get('/form', function () {
    return view('form'); // Replace 'form' with the name of your Blade view file
})->name('form.show');

// Route to handle form submission (POST request)
Route::post('/submit-form', [FormController::class, 'store'])->name('form.submit');

// Display the team page
Route::get('/team', [TeamMemberController::class, 'index'])->name('team');

// Store a new team member (optional, if you want to add members via a form)
Route::post('/team/store', [TeamMemberController::class, 'store'])->name('team.store');
