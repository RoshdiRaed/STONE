
@extends('head')

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">
        <!-- Sidebar -->
        @include('room.sidebar')

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <header class="bg-white shadow">
                <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <h1 class="text-2xl font-semibold text-gray-900">Projects</h1>
                    <div class="flex items-center space-x-4">
                        <!-- Notifications and Profile Dropdowns -->
                    </div>
                </div>
            </header>

            <main class="p-6">
                <div class="mb-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">All Projects</h2>
                        <p class="text-sm text-gray-500">Manage and track all your team's projects</p>
                    </div>
                    <button
                        class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        New Project
                    </button>
                </div>

                <!-- Filter and Search -->
                <div class="mb-6 flex flex-col sm:flex-row sm:justify-between space-y-4 sm:space-y-0">
                    <!-- Filter and Search Inputs -->
                </div>

                <!-- Project Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Project Cards Here -->
                </div>
            </main>
        </div>
    </div>
</body>

@extends('footer')
