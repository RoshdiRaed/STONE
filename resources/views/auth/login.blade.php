@extends('head')
@extends('header')


<!-- Login Form Section -->

<!-- Style -->

<style>
    body {
        background-color: #12141b;
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

<div class="max-w-md mx-auto mt-12 p-6 bg-[#2F3241] shadow-lg rounded-lg mt-56 mb-56">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" >
        @csrf
        <div class="flex justify-center mt-10">
            <!-- Logo with animation -->
            <div class="animate__animated animate__fadeIn" >
                <a href="/">
                    <img class="h-16 w-auto" src="{{ asset('img/logo-removebg-preview.png') }}" alt="Website Logo">
                </a>
            </div>
        </div>
        <!-- Title -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-[#ffffff]">Welcome Back</h2>
            <p class="text-sm text-[#ffffff]">Sign in to your account</p>
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-input block mt-1 border-[#E89846] focus:ring-[#E89846]" type="email"
                name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-input block mt-1 border-[#E89846] focus:ring-[#E89846]" type="password"
                name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mb-4">
            <label for="remember_me" class="inline-flex items-center text-sm text-[#fff]">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-[#2F3241] border-gray-300 dark:border-gray-700 text-[#E89846] shadow-sm focus:ring-[#E89846]"
                    name="remember">
                <span class="ms-2">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-[#E89846] hover:text-[#215783]" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mb-4">
            <x-primary-button class="w-full bg-[#E89846] hover:bg-[#2F3241] text-white">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Create Account Link -->
        <div class="text-center">
            <span class="text-sm text-[#fff]">Don't have an account? </span>
            <a class="text-sm text-[#E89846] hover:text-[#215783]" href="{{ route('register') }}">
                {{ __('Create one') }}
            </a>
        </div>
    </form>
</div>
@extends('footer')
