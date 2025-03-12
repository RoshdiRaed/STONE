@extends('head')
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white p-4">
        <h2 class="text-2xl font-bold mb-6">sDash</h2>
        <nav>
            <ul>
                <li class="mb-4">
                    <a href="/dashboard" class="flex items-center p-2 hover:bg-gray-700 rounded">
                        <span>sDash</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/team" class="flex items-center p-2 hover:bg-gray-700 rounded">
                        <span>Articles</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/profile" class="flex items-center p-2 hover:bg-gray-700 rounded">
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow p-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-semibold">New Article</h1>
                <div class="flex items-center space-x-4">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save Draft</button>
                    <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Publish</button>
                </div>
            </div>
        </header>

        <!-- Article Form -->
        <main class="flex-1 p-6 overflow-y-auto">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
                <form>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                            Title
                        </label>
                        <input
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="title" type="text" placeholder="Enter article title">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                            Category
                        </label>
                        <select
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="category">
                            <option value="">Select a category</option>
                            <option value="tech">Technology</option>
                            <option value="news">News</option>
                            <option value="lifestyle">Lifestyle</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                            Content
                        </label>
                        <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 h-64"
                            id="content" placeholder="Write your article here..."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
                            Tags
                        </label>
                        <input
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="tags" type="text" placeholder="Enter tags separated by commas">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                            Featured Image
                        </label>
                        <input
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="image" type="file" accept="image/*">
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
@extends('footer')
