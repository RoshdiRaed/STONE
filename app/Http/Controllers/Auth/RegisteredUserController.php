<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    // Validate the incoming data
    Log::info('Incoming registration data:', $request->all());
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'phone' => 'required|string|max:20',
        'dob' => 'required|date',
        'gender' => 'required|string|in:male,female,other',
        'address' => 'nullable|string',
        'skills' => 'nullable|string',
        'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'website' => 'nullable|url',
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    // Handle the resume file if present
    if ($request->hasFile('resume')) {
        $resumePath = $request->file('resume')->store('resumes', 'public');
        $validatedData['resume'] = $resumePath;
    }

    // Handle the profile picture file if present
    if ($request->hasFile('profile_picture')) {
        $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        $validatedData['profile_picture'] = $profilePicturePath;
    }

    // Create the user
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'dob' => $validatedData['dob'],
        'gender' => $validatedData['gender'],
        'address' => $validatedData['address'],
        'skills' => $validatedData['skills'],
        'resume' => $validatedData['resume'] ?? null, // Ensure 'resume' is nullable if not uploaded
        'profile_picture' => $validatedData['profile_picture'] ?? null, // Ensure 'profile_picture' is nullable if not uploaded
        'website' => $validatedData['website'],
        'password' => Hash::make($validatedData['password']),
    ]);

    // Trigger the Registered event and log the user in
    event(new Registered($user));
    Auth::login($user);

    // Redirect to dashboard
    return redirect(route('dashboard', absolute: false));
}

}
