@extends('head')
@extends('header')

<!-- Style for full-page background -->
<style>
    body {
        background-color: #12141b;
    }
        /* Ensure the form container width is well-defined */
        .registration-form {
        max-width: 100%; /* Full width of the container */
        padding: 16px; /* Adjust padding for better fit */
    }

    /* Adjusting input fields for better fit */
    .form-input {
        width: 100%; /* Full width */
        padding: 12px 16px; /* Adjust padding for better appearance */
        font-size: 1rem; /* Make the text readable */
        border: 1px solid #ccc; /* Add border for better visibility */
        border-radius: 8px; /* Smooth borders */
    }

    /* Adjust the select input (gender) to also stretch to full width */
    select.form-input {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ccc;
    }

    /* Adjusting buttons and overall form */
    .btn-submit {
        width: 100%;
        background-color: #E89846;
        color: white;
        padding: 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #2F3241;
    }
</style>

<!-- Registration Form Section -->
<x-input-error :messages="$errors->get('field_name')" class="mt-2" />

<div class="max-w-md mx-auto mt-12 p-6 bg-[#2F3241] shadow-lg rounded-lg mt-56 mb-56">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Register Form -->

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Logo with animation -->
        <div class="flex justify-center mt-10">
            <div class="animate__animated animate__fadeIn">
                <a href="/">
                    <img class="h-16 w-auto" src="{{ asset('img/logostone.png') }}" alt="Website Logo">
                </a>
            </div>
        </div>

        <!-- Title -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-[#ffffff]">Create Your Account</h2>
            <p class="text-sm text-[#ffffff]">Fill in the details to get started</p>
        </div>

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-input block mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-input block mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-input block mt-1" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="form-input block mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="form-input block mt-1" type="tel" name="phone" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Date of Birth -->
        <div class="mb-4">
            <x-input-label for="dob" :value="__('Date of Birth')" />
            <x-text-input id="dob" class="form-input block mt-1" type="date" name="dob" required />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mb-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="form-input block mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#E89846] focus:border-[#E89846]" required>
                <option value="">Select...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mb-4">
            <x-input-label for="address" :value="__('Address')" />
            <textarea id="address" name="address" class="form-input block mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#E89846] focus:border-[#E89846]" rows="3"></textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Skills -->
        <div class="mb-4">
            <x-input-label for="skills" :value="__('Skills')" />
            <x-text-input id="skills" class="form-input block mt-1" type="text" name="skills" placeholder="e.g., Python, JavaScript, UI/UX" />
            <x-input-error :messages="$errors->get('skills')" class="mt-2" />
        </div>

        <!-- Upload Resume -->
        <div class="mb-4">
            <x-input-label for="resume" :value="__('Upload Resume')" />
            <input type="file" name="resume" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#E89846] focus:border-[#E89846]" />
        </div>

        <!-- Profile Picture -->
        <div class="mb-4">
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <input type="file" name="profile_picture" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#E89846] focus:border-[#E89846]" />
        </div>

        <!-- Website URL -->
        <div class="mb-4">
            <x-input-label for="website" :value="__('Website URL')" />
            <x-text-input id="website" class="form-input block mt-1" type="url" name="website" placeholder="https://example.com" />
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mb-4">
            <x-primary-button class="w-full bg-[#E89846] hover:bg-[#2F3241] text-white">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <!-- Already Registered Link -->
        <div class="text-center">
            <span class="text-sm text-[#fff]">Already registered? </span>
            <a class="text-sm text-[#E89846] hover:text-[#215783]" href="{{ route('login') }}">
                {{ __('Log in') }}
            </a>
        </div>
    </form>
</div>

@extends('footer')
