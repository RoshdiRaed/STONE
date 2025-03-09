<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission; // Use the FormSubmission model

class TeamMemberController extends Controller
{
    // Display the team page with all form submissions
    public function index()
    {
        $teamMembers = FormSubmission::all(); // Fetch all form submissions
        return view('team', compact('teamMembers')); // Pass data to the view
    }


    // Store a new form submission (optional, if you want to add submissions via a form)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'skills' => 'required|string|max:255',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');

        // Create a new form submission
        FormSubmission::create([
            'name' => $request->name,
            'profile_picture' => $imagePath,
            'skills' => $request->skills,
        ]);

        return redirect()->route('team')->with('success', 'Form submitted successfully!');
    }
}
