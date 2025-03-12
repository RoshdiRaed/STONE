@include('head')

<body class="antialiased">
    @include('header')

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('img/hero.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#17161c]/95 to-[#17161c]/25 backdrop-blur-sm"></div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-2xl text-center lg:text-left" data-aos="fade-up">
                <h1 class="text-4xl font-bold leading-tight text-[#ffd7b3] sm:text-5xl lg:text-6xl">
                    Welcome to Stone Team
                    <span class="block bg-gradient-to-r from-[#e89846] to-[#e89846] bg-clip-text text-transparent">
                        Strength in Unity
                    </span>
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-8 text-[#ffd7b3] sm:text-xl">
                    Stone Team is a dynamic, professional collective dedicated to delivering exceptional services to our
                    clients.
                </p>

                <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:justify-center lg:justify-start">
                    <a href="#" class="btn-primary px-6 py-3 rounded-lg text-white font-semibold">
                        Request a Service
                    </a>
                    <a href="/form" class="btn-secondary px-6 py-3 rounded-lg text-white font-semibold">
                        Join the Team
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-[#2f3241] py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-24">
                <div class="space-y-6" data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-[#ffd7b3] sm:text-4xl">
                        A New Approach to Professional Collaboration
                    </h2>
                    <p class="text-lg leading-8 text-[#ffd7b3]">
                        Stone Team is redefining how professionals work together. By combining our diverse skills and
                        expertise,
                        we deliver exceptional services to clients while empowering each member to grow and succeed in
                        the labor market.
                        Together, we achieve more.
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2">
                        <div class="feature-card p-6 rounded-lg border border-[#e89846]">
                            <h3 class="text-lg font-semibold text-[#ffd7b3]">50+</h3>
                            <p class="text-[#ffd7b3]">Successful Projects</p>
                        </div>
                        <div class="feature-card p-6 rounded-lg border border-[#e89846]">
                            <h3 class="text-lg font-semibold text-[#ffd7b3]">100%</h3>
                            <p class="text-[#ffd7b3]">Client Satisfaction</p>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden " data-aos="fade-left">
                    <img src="{{ asset('img/team-spirit2.png') }}"
                        alt="Stone Team Collaboration"
                        class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- component -->
    <div class="py-16 bg-[rgb(47,50,65)]">
        <div class="container m-auto px-6 text-[#ffd7b3] md:px-12 xl:px-0">
            <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                <!-- Service Card 1: Graphic Design -->
                <div class="bg-[#17161c] rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-[#e89846]">Graphic Design</h3>
                        <p class="mb-6">
                            Our creative designers craft visually stunning graphics that capture your brand’s essence.
                            From logos to marketing materials, we bring your vision to life with precision and flair.
                        </p>
                        <a href="#"
                            class="block font-medium text-[#e89846] hover:text-[#ffd7b3] transition-colors">Learn
                            More</a>
                    </div>
                    <img src="{{ asset('img/graphic-designer.png') }}" class="w-2/3 mx-auto -mb-12"
                        alt="Graphic Design Illustration" loading="lazy" width="900" height="600">
                </div>

                <!-- Service Card 2: Web Development -->
                <div class="bg-[#17161c] rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-[#e89846]">Web Development</h3>
                        <p class="mb-6">
                            We build responsive, user-friendly websites that drive engagement and deliver results.
                            Our developers ensure your site is fast, secure, and optimized for success.
                        </p>
                        <a href="#"
                            class="block font-medium text-[#e89846] hover:text-[#ffd7b3] transition-colors">Learn
                            More</a>
                    </div>
                    <img src="{{ asset('img/web.png') }}" class="w-2/3 mx-auto" alt="Web Development Illustration"
                        loading="lazy" width="900" height="600">
                </div>

                <!-- Service Card 3: Digital Marketing -->
                <div class="bg-[#17161c] rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-[#e89846]">Digital Marketing</h3>
                        <p class="mb-6">
                            Our marketing experts create strategies that boost your online presence and drive growth.
                            From SEO to social media, we help you reach your target audience effectively.
                        </p>
                        <a href="#"
                            class="block font-medium text-[#e89846] hover:text-[#ffd7b3] transition-colors">Learn
                            More</a>
                    </div>
                    <img src="{{ asset('img/social-media-marketing.png') }}" class="w-2/3 mx-auto"
                        alt="Digital Marketing Illustration" loading="lazy" width="900" height="600">
                </div>
            </div>
        </div>
    </div>

    <!-- FAQs -->
    <div class="mx-auto max-w-screen-xl px-4 py-24 sm:px-6 lg:px-8">
        <!-- Image and FAQ Section -->
        <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-24">
            <!-- Image on the Left -->
            <div class="relative overflow-hidden rounded-xl shadow-xl" data-aos="fade-right">
                <img src="{{ asset('img/confused.png') }}" alt="Stone Team Collaboration"
                    class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0e2237]/20"></div>
            </div>

            <!-- FAQs on the Right -->
            <div class="divide-y divide-[#2f3241] rounded-xl border border-[#2f3241] bg-[#17161c]" data-aos="fade-left">
                <!-- FAQ Item 1 -->
                <details class="group p-6 [&_summary::-webkit-details-marker]:hidden" open>
                    <summary class="flex cursor-pointer items-center justify-between gap-1.5 text-[#ffd7b3]">
                        <h2 class="text-lg font-medium">What services does Stone Team offer?</h2>
                        <span class="relative size-5 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 size-5 opacity-100 group-open:opacity-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 size-5 opacity-0 group-open:opacity-100" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-[#ffd7b3]">
                        Stone Team offers a wide range of services, including graphic design, web development, and
                        digital marketing. Our collaborative approach ensures that we deliver high-quality solutions
                        tailored to your needs.
                    </p>
                </details>

                <!-- FAQ Item 2 -->
                <details class="group p-6 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex cursor-pointer items-center justify-between gap-1.5 text-[#ffd7b3]">
                        <h2 class="text-lg font-medium">How can I join Stone Team?</h2>
                        <span class="relative size-5 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 size-5 opacity-100 group-open:opacity-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 size-5 opacity-0 group-open:opacity-100" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-[#ffd7b3]">
                        If you’re passionate about collaboration and want to be part of a professional team, you can
                        apply through our "Join the Team" page. We’re always looking for talented individuals to join
                        our ranks!
                    </p>
                </details>

                <!-- FAQ Item 3 -->
                <details class="group p-6 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex cursor-pointer items-center justify-between gap-1.5 text-[#ffd7b3]">
                        <h2 class="text-lg font-medium">What makes Stone Team unique?</h2>
                        <span class="relative size-5 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 size-5 opacity-100 group-open:opacity-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 size-5 opacity-0 group-open:opacity-100" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-[#ffd7b3]">
                        Stone Team stands out because of our collaborative approach. We combine diverse skills and
                        expertise to deliver exceptional results, ensuring both our team members and clients succeed.
                    </p>
                </details>
            </div>
        </div>

    </div>
    {{-- team --}}


    {{-- @include('team') --}}

    <!-- Testimonials Section -->
    <section class="bg-[#17161c] py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-[#ffd7b3] sm:text-4xl" data-aos="fade-up">
                What Our Clients Say
            </h2>
            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-[#2f3241] p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-[#ffd7b3]">
                        "Stone Team delivered exceptional results for our project. Their professionalism and creativity
                        exceeded our expectations."
                    </p>
                    <div class="mt-6 flex items-center">
                        <img src="{{ asset('storage/profile_pictures/ANHoh7UUK5UnaH9lED6Kq9WwIwxNbKLQetLcBfoD.jpg') }}"
                            alt="Client 1" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#e89846]">John Doe</h3>
                            <p class="text-sm text-[#ffd7b3]">CEO, Company A</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-[#2f3241] p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-[#ffd7b3]">
                        "The team was highly collaborative and responsive. They truly understood our vision and brought
                        it to life."
                    </p>
                    <div class="mt-6 flex items-center">
                        <img src="{{ asset('storage/profile_pictures/ANHoh7UUK5UnaH9lED6Kq9WwIwxNbKLQetLcBfoD.jpg') }}"
                            alt="Client 2" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#e89846]">Jane Smith</h3>
                            <p class="text-sm text-[#ffd7b3]">Marketing Director, Company B</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-[#2f3241] p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <p class="text-[#ffd7b3]">
                        "Working with Stone Team was a game-changer for our business. Their expertise and dedication are
                        unmatched."
                    </p>
                    <div class="mt-6 flex items-center">
                        <img src="{{ asset('storage/profile_pictures/ANHoh7UUK5UnaH9lED6Kq9WwIwxNbKLQetLcBfoD.jpg') }}"
                            alt="Client 3" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#e89846]">Michael Brown</h3>
                            <p class="text-sm text-[#ffd7b3]">Founder, Company C</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="bg-[#2f3241] py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-[#ffd7b3] sm:text-4xl" data-aos="fade-up">
                Our Success Stories
            </h2>
            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Case Study 1 -->
                <div class="bg-[#17161c] p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/e-commers.jpg') }}" alt="Case Study 1"
                        class="w-full h-48 object-cover rounded-lg">
                    <h3 class="mt-6 text-xl font-semibold text-[#e89846]">E-Commerce Platform</h3>
                    <p class="mt-4 text-[#ffd7b3]">
                        We developed a scalable e-commerce platform that increased our client's sales by 200% in just
                        six months.
                    </p>
                    <a href="#"
                        class="mt-6 block font-medium text-[#e89846] hover:text-[#ffd7b3] transition-colors">Read
                        More</a>
                </div>

                <!-- Case Study 2 -->
                <div class="bg-[#17161c] p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/brand.jpg') }}" alt="Case Study 2"
                        class="w-full h-48 object-cover rounded-lg">
                    <h3 class="mt-6 text-xl font-semibold text-[#e89846]">Brand Redesign</h3>
                    <p class="mt-4 text-[#ffd7b3]">
                        Our rebranding strategy helped a client reposition themselves in the market, resulting in a 150%
                        increase in brand recognition.
                    </p>
                    <a href="#"
                        class="mt-6 block font-medium text-[#e89846] hover:text-[#ffd7b3] transition-colors">Read
                        More</a>
                </div>

                <!-- Case Study 3 -->
                <div class="bg-[#17161c] p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/digital.jpg') }}" alt="Case Study 3"
                        class="w-full h-48 object-cover rounded-lg">
                    <h3 class="mt-6 text-xl font-semibold text-[#e89846]">Digital Marketing Campaign</h3>
                    <p class="mt-4 text-[#ffd7b3]">
                        A targeted digital marketing campaign increased our client's online engagement by 300% and
                        boosted conversions by 50%.
                    </p>
                    <a href="#"
                        class="mt-6 block font-medium text-[#e89846] hover:text-[#ffd7b3] transition-colors">Read
                        More</a>
                </div>
            </div>
        </div>
    </section>

    {{-- logos --}}

    <div class="max-w-6xl mx-auto py-12 px-6 mb-6">
        <h2 class="text-2xl font-bold text-gray-800 text-left mb-6" data-aos="fade-up">As Featured In</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 items-center justify-center">
            <img src="//img.exactly.ai/fit-in/384x0/filters:no_upscale():format(webp):quality(75)/exactly.ai%2F_next%2Fstatic%2Fmedia%2Fart-review.91996705.png"
                alt="ArtReview" class="h-6 sm:h-8 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <img src="//img.exactly.ai/fit-in/256x0/filters:no_upscale():format(webp):quality(75)/exactly.ai%2F_next%2Fstatic%2Fmedia%2Fslush.2240c60d.png"
                alt="Slush" class="h-8 sm:h-10 mx-auto" data-aos="fade-up" data-aos-delay="200">
            <img src="//img.exactly.ai/fit-in/256x0/filters:no_upscale():format(webp):quality(75)/exactly.ai%2F_next%2Fstatic%2Fmedia%2Fshoreditch-arts-club.f6256723.png"
                alt="Shoreditch Arts Club" class="h-10 sm:h-12 mx-auto" data-aos="fade-up" data-aos-delay="300">
            <img src="//img.exactly.ai/fit-in/256x0/filters:no_upscale():format(webp):quality(75)/exactly.ai%2F_next%2Fstatic%2Fmedia%2Fartdaily.86cdbfb9.png"
                alt="ArtDaily" class="h-8 sm:h-10 mx-auto" data-aos="fade-up" data-aos-delay="400">
            <img src="//img.exactly.ai/fit-in/256x0/filters:no_upscale():format(webp):quality(75)/exactly.ai%2F_next%2Fstatic%2Fmedia%2Fthe-wrong-biennale.f22c7304.png"
                alt="TheWrong Biennale" class="h-9 sm:h-11 mx-auto" data-aos="fade-up" data-aos-delay="500">
            <img src="//img.exactly.ai/fit-in/384x0/filters:no_upscale():format(webp):quality(75)/exactly.ai%2F_next%2Fstatic%2Fmedia%2Fdeutsche-welle.632caa35.png"
                alt="Deutsche Welle" class="h-9 sm:h-11 mx-auto" data-aos="fade-up" data-aos-delay="600">
        </div>
    </div>

    <!-- Footer -->
    @include('footer')

</body>

</html>
