<header
    class="fixed inset-x-0 top-0 z-30 w-full max-w-screen-md mx-auto border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg transition-transform duration-300 ease-in-out transform">
    <div class="px-4">
        <div class="flex items-center justify-between">

            <div class="flex shrink-0">
                <a aria-current="page" class="flex items-center" href="/">
                    <img class="h-12 w-auto" src="{{ asset('img/logostone.png') }}" alt="">
                    <p class="sr-only">Website Title</p>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex md:hidden">
                <button id="mobile-menu-button" class="p-2 text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:justify-center md:gap-5">
                <a aria-current="page"
                    class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                    href="/">Home</a>
                <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                    href="{{ route('team') }}">Team</a>
                <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                    href="{{ route('about') }}">About</a>
                <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                    href="{{ route('room') }}">Rooms</a>
                <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                    href="{{ route('blog') }}">Blog</a>
            </div>

            <!-- CTA Buttons (Sign Up, Log In, Go Pro) -->
            <div class="hidden md:flex md:items-center md:justify-end md:gap-3">
                @guest
                <!-- Login Button (Only show if not logged in) -->
                <button id="login-popup-button"
                    class="inline-flex items-center justify-center rounded-xl bg-sky-950 px-3 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-sky-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    Log in
                </button>
                @else
                <!-- User Avatar Dropdown (Only show if logged in) -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                        <!-- Check if the user has a profile picture -->
                        @if (Auth::user()->profile_picture)
                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="h-8 w-8 rounded-full object-cover border">
                        @else
                            <!-- Default avatar if no profile picture is uploaded -->
                            <img src="{{ auth()->user()->avatar ?? asset('img/user.png') }}" alt="User avatar" class="h-8 w-8 rounded-full object-cover border">
                        @endif
                        <span class="sr-only">User menu</span>
                    </button>

                    <div x-show="open"
                         @click.away="open = false"
                         class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
                @endguest

                <!-- Pro Button (Always show) -->
                <a class="inline-flex items-center justify-center rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white shadow-lg transition-all duration-150 hover:bg-purple-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    href="/pro-form">Go Pro</a>
            </div>
        </div>
    </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-4 pt-2 pb-4">
            <a aria-current="page"
                class="block rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                href="/">Home</a>
            <a class="block rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                href="{{ route('team') }}">Team</a>
            <a class="block rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                href="{{ route('about') }}">About</a>
            <a class="block rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                href="{{ route('room') }}">Rooms</a>

            @guest
                <a class="block rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                    href="{{ route('dashboard') }}">Log in</a>
            @else
                <a href="{{ route('dashboard') }}"
                    class="block rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900">
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left rounded-lg px-2 py-2 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100 hover:text-gray-900">
                        Log Out
                    </button>
                </form>
            @endguest
        </div>
    </div>
</header>

@extends('popup')

<!-- Mobile Menu Toggle Script -->
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<!-- Alpine.js for dropdown functionality (add to your layout if not already included) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
