@extends('head')
@extends('header')

<body class="bg-gray-100 font-sans">
    <!-- Main Content -->
    <main class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:px-8 mt-20">
        <!-- Featured Post -->
        <section class="mb-12" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('img/img.png') }}" alt="Featured post" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">The Future of Content Creation</h2>
                    <p class="text-gray-600 mb-4">Explore how AI and human creativity are shaping the next generation of
                        digital content.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>John Doe</span>
                        <span class="mx-2">•</span>
                        <span>March 10, 2025</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline font-medium">Read More →</a>
                </div>
            </div>
        </section>

        <!-- Blog Posts Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12"  data-aos-delay="100">
            <!-- Post Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-left">
                <img src="{{ asset('img/img.png') }}" alt="Post" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Tech Trends 2025</h3>
                    <p class="text-gray-600 text-sm mb-4">A look at the emerging technologies that will dominate the
                        year.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Jane Smith</span>
                        <span class="mx-2">•</span>
                        <span>March 8, 2025</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </div>
            </div>

            <!-- Post Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('img/img.png') }}" alt="Post" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Writing Tips for Beginners</h3>
                    <p class="text-gray-600 text-sm mb-4">Essential advice to start your writing journey.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Mike Johnson</span>
                        <span class="mx-2">•</span>
                        <span>March 5, 2025</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </div>
            </div>

            <!-- Post Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-left" data-aos-delay="400">
                <img src="{{ asset('img/img.png') }}" alt="Post" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">The Power of Storytelling</h3>
                    <p class="text-gray-600 text-sm mb-4">How narratives drive engagement and connection.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Emily Brown</span>
                        <span class="mx-2">•</span>
                        <span>March 1, 2025</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </div>
            </div>
        </section>

        <!-- Newsletter Signup -->
        <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg p-6 text-center" data-aos="fade-down" data-aos-delay="100">
            <h3 class="text-2xl font-bold mb-4">Subscribe to Our Newsletter</h3>
            <p class="mb-6">Stay updated with the latest articles and insights.</p>
            <form class="flex max-w-md mx-auto">
                <input type="email" placeholder="Enter your email"
                    class="flex-1 px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                <button type="submit"
                    class="px-6 py-2 bg-white text-blue-600 rounded-r-lg hover:bg-gray-100 transition duration-200">
                    Join
                </button>
            </form>
        </section>
    </main>

</body>

@extends('footer')
