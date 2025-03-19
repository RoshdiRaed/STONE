@extends('head')
@extends('header')

<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center p-6" data-aos="fade-up" data-aos-delay="100">
        <div class="max-w-2xl w-full bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Profile Header -->
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <img class="h-24 w-24 rounded-full object-cover border-4 border-white"
                        src="{{ asset('storage/' . $submission->profile_picture) }}" alt="Profile picture">

                    </div>
                    <div class="text-white">
                        <h2 class="text-2xl font-bold">{{ $submission->name }}</h2>
                        <p class="text-sm opacity-75">{{ '@' . strtolower(str_replace(' ', '', $submission->name)) }}</p>
                    </div>
                </div>
            </div>

            <!-- Profile Details -->
            <div class="p-6">
                <div class="mb-6">
                    <h3 class="text-gray-700 text-lg font-semibold mb-2">Bio</h3>
                    <p class="text-gray-600">{{ $submission->skills ?? 'No skills provided.' }}</p>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div class="text-center">
                        <p class="text-xl font-bold text-gray-800">0</p>
                        <p class="text-sm text-gray-600">Articles</p>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="space-y-4">
                    <div class="flex items-center text-gray-600">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>{{ $submission->address ?? 'No address provided.' }}</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>{{ $submission->email }}</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Joined {{ $submission->created_at->format('F Y') }}</span>
                    </div>
                </div>
            </div>

            <!-- Recent Articles -->
            <div class="p-6 border-t">
                <h3 class="text-gray-700 text-lg font-semibold mb-4">Recent Articles</h3>
                <div class="space-y-3">
                    <a href="#" class="block p-3 hover:bg-gray-50 rounded-lg">
                        <p class="font-medium text-gray-800">The Future of AI Writing</p>
                        <p class="text-sm text-gray-500">Published 2 days ago</p>
                    </a>
                    <a href="#" class="block p-3 hover:bg-gray-50 rounded-lg">
                        <p class="font-medium text-gray-800">Tech Trends 2025</p>
                        <p class="text-sm text-gray-500">Published 1 week ago</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

@extends('footer')
