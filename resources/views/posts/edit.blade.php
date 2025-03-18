@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Edit Post</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}"
                    class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('title')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content Field -->
            <div class="mb-6">
                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Content</label>
                <textarea name="content" id="content" rows="10"
                    class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ old('content', $article->content) }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category Field (Optional) -->

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category</label>
                <select id="category" name="category" class="mt-1 p-2 border rounded w-full" required>
                    <option value="" disabled selected>Select a Category</option>
                    <option value="Technology">Technology</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Health">Health</option>
                    <option value="Business">Business</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Update Post
                </button>
                <a href="{{ route('articles.show', $article->id) }}" class="ml-4 text-gray-600 dark:text-gray-400 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
