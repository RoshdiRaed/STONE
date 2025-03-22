@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12 py-12">
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 mb-8">Edit Post</h1>

            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Image Upload -->
                <div class="mb-6">
                    <label for="image" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Upload
                        Image</label>
                    <input type="file" id="image" name="image"
                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        accept="image/*">
                </div>

                <!-- Display validation errors for the image -->
                @error('image')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror

                <!-- Title Field -->
                <div class="mb-6">
                    <label for="title" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Post
                        Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}"
                        class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content Field -->
                <div class="mb-6">
                    <label for="content" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Post
                        Content</label>
                    <textarea name="content" id="content" rows="10"
                        class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('content', $article->content) }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category Selection -->
                <div class="mb-6">
                    <label for="category" class="block text-lg font-medium text-gray-800 dark:text-gray-300 mb-2">Select
                        Category</label>
                    <select id="category" name="category"
                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        required>
                        <option value="" disabled selected>Select a Category</option>
                        <option value="Technology"
                            {{ old('category', $article->category) == 'Technology' ? 'selected' : '' }}>Technology</option>
                        <option value="Lifestyle"
                            {{ old('category', $article->category) == 'Lifestyle' ? 'selected' : '' }}>Lifestyle</option>
                        <option value="Health" {{ old('category', $article->category) == 'Health' ? 'selected' : '' }}>
                            Health</option>
                        <option value="Business" {{ old('category', $article->category) == 'Business' ? 'selected' : '' }}>
                            Business</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Update Post
                    </button>
                    <a href="{{ route('articles.show', $article->id) }}"
                        class="ml-4 text-gray-600 dark:text-gray-400 hover:underline">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
