@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-8">Blog Posts</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @if($articles->count() > 0)
            @foreach($articles as $article)
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">{{ $article->title }}</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            By {{ $article->user->name }} • {{ $article->created_at->format('M d, Y') }}
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">{{ Str::limit($article->content, 150) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('articles.show', $article->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-span-full text-center py-12">
                <p class="text-gray-600 dark:text-gray-400">No blog posts available yet.</p>
            </div>
        @endif
    </div>
</div>
@endsection
