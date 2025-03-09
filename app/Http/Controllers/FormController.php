<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    // Method to display the form
    public function showForm()
    {
        return view('form'); // Replace 'form' with the name of your Blade view file
    }

    // Method to handle form submission
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'dob' => 'required|date',
            'gender' => 'required|string|in:male,female,other',
            'address' => 'nullable|string',
            'skills' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable|url',
            'password' => 'required|string|min:8|confirmed',
            'subscribe' => 'nullable|boolean',
            'contact_method' => 'required|string|in:email,phone,mail',
            'preferred_time' => 'nullable|date_format:H:i',
            'user_id' => 'required|integer',
        ]);

        // Handle file uploads
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $validatedData['resume'] = $resumePath;
        }

        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $validatedData['profile_picture'] = $profilePicturePath;
        }

        // Hash the password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Store the data in the database
        FormSubmission::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
