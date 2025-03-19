@extends('head')

<!-- Sidebar -->
<div class="flex-shrink-0" :class="{ 'w-64': sidebarOpen, 'w-20': !sidebarOpen }">
    <div class="flex flex-col h-full bg-gray-800 text-white transition-all duration-300">
        <div class="flex items-center justify-between p-4 border-b border-gray-700">
            <div class="flex items-center">
                <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="" class="w-10 h-10">
                <span class="ml-2 text-lg font-semibold" x-show="sidebarOpen">Stone Team</span>
            </div>
            <button @click="sidebarOpen = !sidebarOpen" class="p-1 rounded-md hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>

        <nav class="flex-1 px-2 py-4 space-y-2 overflow-y-auto">
            <a href="{{ route('room') }}"
            class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
            <img src="/img/dashboard.svg" alt="Main Page Icon" class="mr-2 w-5 h-5">
            <span x-show="sidebarOpen">Main Page</span>
        </a>
            <a href="/room/projects"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <span x-show="sidebarOpen">Projects</span>
            </a>
            <a href="{{ route('room.chat') }}"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                    </path>
                </svg>
                <span x-show="sidebarOpen">Messages</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
                <span x-show="sidebarOpen">Tasks</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
                <span x-show="sidebarOpen">Team</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                    </path>
                </svg>
                <span x-show="sidebarOpen">Files</span>
            </a>
            <a href="{{ route('home') }}"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <img src="/img/home1.png" alt="Main Page Icon" class="mr-2 w-5 h-5">
                <span x-show="sidebarOpen">Main Page</span>
            </a>
            <a href="{{ route('blog') }}"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <img src="/img/psot2.png" alt="Article Icon" class="mr-2 w-5 h-5">
                <span x-show="sidebarOpen">Article</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span x-show="sidebarOpen">Settings</span>
            </a>
        </nav>
        <div class="p-4 border-t border-gray-700">
            <div class="flex items-center">
                <img src="/img/img.png" alt="User" class="w-10 h-10 rounded-full">
                <div class="ml-3" x-show="sidebarOpen">
                    <p class="text-sm font-medium">John Doe</p>
                    <p class="text-xs text-gray-400">Designer</p>
                </div>
            </div>
        </div>
    </div>
</div>
