@extends('layouts.app')
@extends('head')

@section('content')
    <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12 py-8">
        <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Create a New Post</h2>

        <form action="{{ url('/create-post') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Image Upload -->
            <div class="mb-6">
                <label for="image" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Upload
                    Image</label>
                <input type="file" id="image" name="image"
                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    accept="image/*">

                <!-- Display validation errors for the image -->
                @error('image')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Post Title -->
            <div class="mb-6">
                <label for="title" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Post
                    Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required placeholder="Enter the title of your post">
            </div>

            <!-- Post Content -->
            <div class="mb-6">
                <label for="content" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Post
                    Content</label>
                <textarea id="content" name="content"
                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    rows="6" required placeholder="Write the content of your post"></textarea>
            </div>

            <!-- Category Selection -->
            <div class="mb-6">
                <label for="category" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Select
                    Category</label>
                <select id="category" name="category"
                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="" disabled selected>Select a Category</option>
                    <option value="Technology">Technology</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Health">Health</option>
                    <option value="Business">Business</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Create Post
                </button>
            </div>
        </form>
    </div>
@endsection
