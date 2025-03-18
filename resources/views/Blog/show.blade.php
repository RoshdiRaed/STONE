@extends('layouts.app')

{{-- @section('content') --}}
<div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-10 py-14">
    <article class="bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl shadow-2xl p-8">
        <h1 class="text-4xl font-semibold text-gray-900 dark:text-gray-100">{{ $article->title }}</h1>

        <div class="flex items-center mt-5 text-gray-600 dark:text-gray-300">
            <span>By <strong>{{ $article->user->name }}</strong></span>
            <span class="mx-2">•</span>
            <span>{{ $article->created_at->format('M d, Y') }}</span>
            @if($article->created_at != $article->updated_at)
                <span class="mx-2">•</span>
                <span>Updated: {{ $article->updated_at->format('M d, Y') }}</span>
            @endif
        </div>

        <div class="mt-10 prose dark:prose-invert max-w-none text-lg text-gray-700 dark:text-gray-400">
            <p>{{ $article->content }}</p>
        </div>

        <div class="mt-12 pt-8 border-t border-gray-300 dark:border-gray-600 flex justify-between items-center">
            <a href="{{ route('blog') }}" class="text-blue-700 dark:text-blue-400 hover:underline text-lg">Back to Blog</a>

            @if(Auth::check() && Auth::id() == $article->user_id)
                <div class="ml-auto flex space-x-6">
                    <a href="{{ route('articles.edit', $article->id) }}" class=" hover:underline text-lg">Edit Post</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-[#1F1C2C] hover:bg-[#928DAB] font-semibold py-2 px-4 rounded-lg transition duration-300" onclick="return confirm('Are you sure you want to delete this post?')">
                            Delete Post
                        </button>
                    </form>
                </div>
            @endif
        </div>

    </article>
</div>

@endsection
