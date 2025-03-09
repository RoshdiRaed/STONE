@include('head')
@include('header')
<!-- About Us Page -->
<div class="bg-[#17161c] text-[#ffd7b3]">
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/about_header.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#17161c]/95 to-[#17161c]/25 backdrop-blur-sm"></div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-2xl text-center lg:text-left" data-aos="fade-up">
                <h1 class="text-4xl font-bold leading-tight text-[#ffd7b3] sm:text-5xl lg:text-6xl">
                    About Stone Team
                    <span class="block bg-gradient-to-r from-[#e89846] to-[#e89846] bg-clip-text text-transparent">
                        Strength in Unity
                    </span>
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-8 text-[#ffd7b3] sm:text-xl">
                    We are a dynamic, professional collective dedicated to delivering exceptional services to our clients.
                    By combining our diverse skills and expertise, we create a powerful synergy that drives success in the labor market.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="bg-[#2f3241] py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-24">
                <div class="space-y-6" data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-[#ffd7b3] sm:text-4xl">
                        Our Mission
                    </h2>
                    <p class="text-lg leading-8 text-[#ffd7b3]">
                        At Stone Team, our mission is to empower professionals by fostering collaboration and innovation.
                        We aim to provide high-quality services that help our clients achieve their goals while creating opportunities
                        for our team members to grow and succeed in the labor market.
                    </p>
                </div>

                <div class="relative overflow-hidden rounded-xl shadow-xl" data-aos="fade-left">
                    <img
                        src="{{ asset('img/task.png') }}"
                        alt="Stone Team Mission"
                        class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#17161c]/50"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="bg-[#17161c] py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-[#ffd7b3] sm:text-4xl">
                    Our Core Values
                </h2>
                <p class="mx-auto mt-4 max-w-xl text-lg leading-8 text-[#ffd7b3]">
                    These values guide everything we do at Stone Team.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Value 1: Collaboration -->
                <div class="bg-[#2f3241] rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-semibold text-[#e89846]">Collaboration</h3>
                    <p class="mt-4 text-lg leading-8 text-[#ffd7b3]">
                        We believe in the power of teamwork. By working together, we achieve more than we could individually.
                    </p>
                </div>

                <!-- Value 2: Innovation -->
                <div class="bg-[#2f3241] rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-semibold text-[#e89846]">Innovation</h3>
                    <p class="mt-4 text-lg leading-8 text-[#ffd7b3]">
                        We constantly seek new ways to solve problems and deliver value to our clients.
                    </p>
                </div>

                <!-- Value 3: Excellence -->
                <div class="bg-[#2f3241] rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-2xl font-semibold text-[#e89846]">Excellence</h3>
                    <p class="mt-4 text-lg leading-8 text-[#ffd7b3]">
                        We strive for the highest standards in everything we do, ensuring quality and professionalism.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="bg-[#2f3241] py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-[#ffd7b3] sm:text-4xl">
                    Join Us Today
                </h2>
                <p class="mx-auto mt-4 max-w-xl text-lg leading-8 text-[#ffd7b3]">
                    Are you ready to be part of a professional, collaborative team? Join Stone Team and take your career to the next level.
                </p>
                <div class="mt-10">
                    <a href="/join" class="btn-primary px-6 py-3 rounded-lg text-white font-semibold bg-[#e89846] hover:bg-[#ffd7b3] hover:text-[#17161c] transition-colors">
                        Join the Team
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('footer')
