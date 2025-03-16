@extends('layouts.app') <!-- Assuming this is the layout with @yield('content') -->
@extends('head')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Create Post</h2>

        <form action="{{ url('/create-post') }}" method="POST" class="mt-6">
            @csrf

            <!-- Post Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 border rounded w-full" required>
            </div>

            <!-- Post Content -->
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content</label>
                <textarea id="content" name="content" class="mt-1 p-2 border rounded w-full" rows="6" required></textarea>
            </div>

            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-500">
                Create Post
            </button>
        </form>
    </div>
@endsection
