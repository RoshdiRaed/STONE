@extends('head')

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">

        @include('room.sidebar')

        <!-- Main Content -->
        <div class="flex-1 overflow-auto bg-gray-50">
            <!-- Header with sticky positioning -->
            @extends('header')

            <!-- Main Content Area -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-20">
                <!-- Dashboard Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-gray-600 text-sm">Total Team Members</h2>
                                <p class="text-2xl font-semibold text-gray-800">{{ $teamCount ?? 12 }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-gray-600 text-sm">Active Projects</h2>
                                <p class="text-2xl font-semibold text-gray-800">{{ $activeProjects ?? 8 }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Add more stat cards as needed -->
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow mb-8">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Recent Activity</h3>
                    </div>
                    <div class="p-6">
                        <!-- Activity list -->
                        @forelse($activities ?? [] as $activity)
                            <div class="flex items-center py-3">
                                <span class="flex-shrink-0 w-2 h-2 rounded-full bg-blue-600 mr-3"></span>
                                <div class="flex-grow">
                                    <p class="text-sm text-gray-800">{{ $activity->description }}</p>
                                    <p class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-sm">No recent activity</p>
                        @endforelse
                    </div>
                </div>

                <!-- Meeting Section -->
                <div class="bg-white rounded-lg shadow mb-8">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Team Meetings</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Schedule or join a meeting to discuss project details.</p>
                        <button
                            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none">
                            Schedule Meeting
                        </button>
                    </div>
                </div>


                <!-- Additional content sections -->
                @yield('content')
            </main>
        </div>
        @extends('footer')
    </div>
</body>
