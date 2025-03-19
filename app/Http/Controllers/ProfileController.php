<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function rules()
    {
        return [
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // 10MB max
            'resume' => 'nullable|mimes:pdf,docx,doc|max:10240', // 10MB max
        ];
    }

    public function edit(Request $request): View
    {
        // dd($request->user());
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Update fields that are not file uploads
        $user->fill($request->validated());

        // Handle file uploads for resume and profile_picture
        if ($request->hasFile('resume')) {
            // Delete old file if exists
            if ($user->resume && Storage::exists('public/' . $user->resume)) {
                Storage::delete('public/' . $user->resume);
            }
            $user->resume = $request->file('resume')->store('resumes', 'public');
        }

        if ($request->hasFile('profile_picture')) {
            // Delete old file if exists
            if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
                Storage::delete('public/' . $user->profile_picture);
            }
            $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Handle email verification reset if email is updated
        if ($request->user()->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        // Delete files if they exist
        if ($user->resume && Storage::exists('public/' . $user->resume)) {
            Storage::delete('public/' . $user->resume);
        }

        if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
            Storage::delete('public/' . $user->profile_picture);
        }

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
