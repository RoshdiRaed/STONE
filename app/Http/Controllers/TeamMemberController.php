<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = FormSubmission::all();
        return view('team', compact('teamMembers'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'skills' => 'required|string|max:255',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');

        FormSubmission::create([
            'name' => $request->name,
            'profile_picture' => $imagePath,
            'skills' => $request->skills,
        ]);

        return redirect()->route('team')->with('success', 'Form submitted successfully!');
    }
}
