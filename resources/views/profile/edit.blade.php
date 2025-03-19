{{-- <x-app-layout> --}}
@extends('head')
@extends('header')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Profile') }}
    </h2>
</x-slot>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-24">
        <!-- Display Profile Picture and Resume -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profile Details</h3>
                <div class="mt-4">
                    @if (Auth::user()->profile_picture)
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture"
                            class="w-32 h-32 rounded-full object-cover">
                    @else
                        <p class="text-gray-600 dark:text-gray-400">No profile picture uploaded.</p>
                    @endif
                </div>
                <div class="mt-4">
                    @if (Auth::user()->resume)
                        <a href="{{ asset('storage/' . Auth::user()->resume) }}" target="_blank"
                            class="text-blue-600 dark:text-blue-400 hover:underline">Download Resume</a>
                    @else
                        <p class="text-gray-600 dark:text-gray-400">No resume uploaded.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Update Profile Information Form -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password Form -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete User Form -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>

{{-- </x-app-layout> --}}
@extends('footer')
