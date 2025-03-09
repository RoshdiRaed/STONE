@include('head')
@include('header')
<section class="bg-[#17161c] dark:bg-[#2f3241]">
    <div class="container px-6 py-10 mx-auto">

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
            
            @foreach($teamMembers as $member)
            <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-[#e89846] rounded-xl" data-aos="fade-up" data-aos-delay="200">
                <!-- Profile Picture -->
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-[#ffd7b3]" src="{{ asset('storage/' . $member->profile_picture) }}" alt="{{ $member->name }}">

                <!-- Name -->
                <h1 class="mt-4 text-2xl font-semibold text-[#ffd7b3] capitalize dark:text-[#e89846] group-hover:text-[#17161c]">{{ $member->name }}</h1>

                <!-- Skills -->
                <p class="mt-2 text-[#ffd7b3] capitalize dark:text-[#e89846] group-hover:text-[#17161c]">{{ $member->skills }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('footer')
