@extends('head')

<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-[#2E303F] text-white p-4">
        <h2 class="text-2xl font-bold mb-6 text-[#e89846] text-center">
            <a href="/dashboard" class="hover:text-white">Stone Dashboard</a>
        </h2>
        <nav>
            <ul>
                <li class="mb-4">
                    <a href="/dashboard" class="flex items-center p-2 hover:bg-gray-700 rounded transition duration-300">
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/blog" class="flex items-center p-2 hover:bg-gray-700 rounded transition duration-300">
                        <span class="ml-2">Articles</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/team" class="flex items-center p-2 hover:bg-gray-700 rounded transition duration-300">
                        <span class="ml-2">Team</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/profile" class="flex items-center p-2 hover:bg-gray-700 rounded transition duration-300">
                        <span class="ml-2">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <h2 class="text-3xl font-semibold text-[#2E303F] mb-6">Create New Article</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
                <input
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="title" name="title" type="text" placeholder="Enter article title" required>
            </div>

            <!-- Category -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">Category</label>
                <select
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="tech">Technology</option>
                    <option value="news">News</option>
                    <option value="lifestyle">Lifestyle</option>
                </select>
            </div>

            <!-- Content -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Content</label>
                <textarea
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 h-64"
                    id="content" name="content" placeholder="Write your article here..." required></textarea>
            </div>

            <!-- Tags -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">Tags</label>
                <input
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="tags" name="tags" type="text" placeholder="Enter tags separated by commas" required>
            </div>

            <!-- Featured Image -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Featured Image</label>
                <input
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="image" name="image" type="file" accept="image/*">
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit" class="w-full px-4 py-2 bg-[#e89846] text-white rounded hover:bg-[#2f3241] transition duration-300">
                    Publish
                </button>
            </div>
        </form>
    </div>
</div>

@extends('footer')
