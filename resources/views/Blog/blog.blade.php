@extends('head')
@extends('header')

{{-- <h1>{{$article->title}}</h1>
<h1>{{$article->content}}</h1> --}}

{{-- @section('content') --}}
<div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:px-8 mt-24 mb-20">
    @if (isset($article))
        <!-- Single Article View -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $article->title }}</h1>
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <img src="{{ asset('storage/' . ($article->user->profile_picture ?? 'default-avatar.png')) }}"
                        alt="{{ $article->user->name ?? 'Anonymous' }}"
                        class="w-12 h-12 rounded-full border border-gray-300 shadow-sm object-cover">
                    <span class="ml-2">{{ $article->user->name ?? 'Anonymous' }}</span>
                    {{-- <span>{{ $article->user->name ?? 'Anonymous' }}</span> --}}
                    <span class="mx-2">•</span>
                    <span>{{ $article->created_at->format('F d, Y') }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ $article->category }}</span>
                    @if ($article->created_at != $article->updated_at)
                        <span class="mx-2">•</span>
                        <span>Updated: {{ $article->updated_at->format('F d, Y') }}</span>
                    @endif
                </div>
                <div class="prose max-w-none text-gray-600 mb-8">
                    <img src="{{ asset('storage/' . ($article->image ?? 'img/titlepost.png')) }}"
                        alt="{{ $article->title }}">

                </div>

                <p>{{ $article->content }}</p>

                @if (Auth::check() && Auth::id() == $article->user_id)
                    <div class="flex mt-8 pt-4 border-t border-gray-200">
                        <!-- Edit Post Button -->
                        <a href="{{ route('articles.edit', $article->id) }}"
                            class="inline-flex items-center justify-center rounded-xl bg-teal-600 px-4 py-2 text-sm font-semibold text-white shadow-lg transition-all duration-150 hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-600">
                            Edit Post
                        </a>

                        <!-- Delete Post Button -->
                        <button type="button"
                            class="ml-4 inline-flex items-center justify-center rounded-xl bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-lg transition-all duration-150 hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                            id="deletePostBtn" data-article-id="{{ $article->id }}">
                            Delete Post
                        </button>

                        <!-- Hidden Form for Delete Submission -->
                        <form id="deleteForm" action="{{ route('articles.destroy', $article->id) }}" method="POST"
                            class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>

                    <!-- Custom Confirmation Dialog -->
                    <div id="confirmDialog"
                        class="fixed inset-0 items-center flex justify-center bg-black bg-opacity-50 z-50 hidden">
                        <div class="bg-white rounded-xl p-6 max-w-md w-full shadow-xl">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Confirm Deletion</h3>
                            <p class="text-gray-600 mb-6">Are you sure you want to delete this post? This action cannot
                                be undone.</p>
                            <div class="flex justify-end space-x-3">
                                <button id="cancelDelete"
                                    class="px-4 py-2 rounded-lg bg-gray-200 text-gray-800 font-medium hover:bg-gray-300 transition-colors">
                                    Cancel
                                </button>
                                <button id="confirmDelete"
                                    class="px-4 py-2 rounded-lg bg-red-600 text-white font-medium hover:bg-red-500 transition-colors">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Toast Message Container -->
                    <div id="toastMessage"
                        class="fixed bottom-4 right-4 px-6 py-3 rounded-lg bg-green-500 text-white opacity-0 transition-opacity duration-300 z-50 hidden">
                        ✅ Post successfully deleted.
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const deleteBtn = document.getElementById('deletePostBtn');
                            const confirmDialog = document.getElementById('confirmDialog');
                            const cancelDelete = document.getElementById('cancelDelete');
                            const confirmDelete = document.getElementById('confirmDelete');
                            const deleteForm = document.getElementById('deleteForm');
                            const toastMessage = document.getElementById('toastMessage');

                            // Show confirmation dialog when delete button is clicked
                            deleteBtn.addEventListener('click', function() {
                                confirmDialog.classList.remove('hidden');
                            });

                            // Hide dialog when cancel is clicked
                            cancelDelete.addEventListener('click', function() {
                                confirmDialog.classList.add('hidden');
                            });

                            // Handle confirmation
                            confirmDelete.addEventListener('click', function() {
                                // Hide dialog
                                confirmDialog.classList.add('hidden');

                                // Show toast message
                                toastMessage.classList.remove('hidden');
                                toastMessage.classList.remove('opacity-0');
                                toastMessage.classList.add('opacity-100');

                                // Set small delay before submitting form
                                setTimeout(function() {
                                    deleteForm.submit();
                                }, 1000);

                                // Auto hide toast after some time
                                setTimeout(function() {
                                    toastMessage.classList.remove('opacity-100');
                                    toastMessage.classList.add('opacity-0');
                                }, 3000);
                            });
                        });
                    </script>
                @endif

                <div class="mt-8">
                    <a href="{{ route('blog') }}" class="text-blue-600 hover:underline">← Back to Blog</a>
                </div>
            </div>
        </div>
    @else
        <!-- Blog Index View -->
        <!-- Featured Post -->
        <section class="mb-12" data-aos="fade-up" data-aos-delay="100">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Blog Posts</h1>

            @if (isset($articles) && $articles->count() > 0)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ $articles->first()->image && file_exists(public_path('storage/' . $articles->first()->image))
                        ? asset('storage/' . $articles->first()->image)
                        : asset('img/titlepost.png') }}"
                        alt="Featured post" class="w-full h-64 object-cover">

                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $articles->first()->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($articles->first()->content, 150) }}</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>{{ $articles->first()->user->name ?? 'Anonymous' }}</span>
                            <span class="mx-2">•</span>
                            <span>{{ $articles->first()->created_at->format('F d, Y') }}</span>
                        </div>
                        <a href="{{ route('articles.show', $articles->first()->id) }}"
                            class="text-blue-600 hover:underline font-medium">Read More →</a>
                    </div>
                </div>

                <!-- Blog Posts Grid -->
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12 mt-12">
                    @foreach ($articles->skip(1) as $article)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-left">
                            <img src="{{ $article->image && file_exists(public_path('storage/' . $article->image))
                                ? asset('storage/' . $article->image)
                                : asset('img/titlepost.png') }}"
                                alt="Post" class="w-full h-48 object-cover">

                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $article->title }}</h3>
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($article->content, 100) }}</p>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <span>{{ $article->user->name ?? 'Anonymous' }}</span>
                                    <span class="mx-2">•</span>
                                    <span>{{ $article->created_at->format('F d, Y') }}</span>
                                </div>
                                <a href="{{ route('articles.show', $article->id) }}"
                                    class="text-blue-600 hover:underline">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </section>
            @else
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <p class="text-gray-600 mb-4">No blog posts available yet.</p>
                    @if (Auth::check())
                        <a href="{{ route('create-post') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Create Your
                            First Post</a>
                    @endif
                </div>
            @endif
        </section>


        <!-- Newsletter Signup -->
        <section
            class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-xl shadow-lg p-8 text-center transform transition-transform hover:scale-101"
            data-aos="fade-down" data-aos-delay="100">
            <h3 class="text-3xl font-semibold mb-4">Subscribe to Our Newsletter</h3>
            <p class="mb-6 text-lg text-blue-100">Stay updated with the latest articles, insights, and exclusive
                content.</p>
            <form class="flex max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-sm">
                <input type="email" placeholder="Enter your email"
                    class="flex-1 px-5 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400">
                <button type="submit"
                    class="px-8 py-3 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition-colors duration-200">
                    Subscribe
                </button>
            </form>
        </section>
    @endif
</div>


{{-- @endsection --}}

@extends('footer')
