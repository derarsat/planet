@extends('layout')

@section('content')
    <div class="grid grid-cols-1 gap-12 lg:gap-24">
        {{----}}
        <div class="relative">
            <video class="hidden lg:block w-full relative z-10" autoplay muted loop>
                <source src="videos/vid_desk.mp4">
            </video>
            <video class="block lg:hidden w-full relative z-10" autoplay muted loop>
                <source src="videos/vid_mob.mp4">
            </video>
            <div
                class="absolute inset-0 z-20 flex items-center justify-center flex-col gap-8 bg-gradient-to-t from-white via-transparent to-transparent">
                <h1 class="text-white font-bold text-4xl lg:text-7xl text-center">
                    MASTERING BOTTLING <br> FOR GLOBAL DISTRIBUTION
                </h1>
                <a href="/global-presence" class="bg-white text-primary px-6 py-2 rounded-full">Learn More</a>

            </div>

        </div>
        {{----}}
        <div class="text-center grid grid-cols-1 gap-12">
            <h2 class="text-primary font-bold text-4xl lg:text-7xl">BEHIND <br> THE BOTTLES</h2>
            <p class="max-w-3xl px-4 mx-auto font-light text-text">
                With the highest ultra modern production capacity, we have set out to meet the growing demand for
                quality
                and value in the Nigerian market.
                The project started in 2015 when ABN and Monarch decided to
                replicate the success story in the Nigerian market by investing in the state-of-the-art factory along
                Lagos
                Ibadan expressway with over 100,000 sqm which is currently Planet Bottling Companys factory.
            </p>
            <div class="flex justify-center">
                <a href="/who-we-are" class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</a>

            </div>
        </div>
        {{----}}
        <div class="container">
            <div class="max-w-5xl mx-auto relative rounded-3xl overflow-hidden">
                <img src="/images/machine.webp" class="w-full" alt="Planet Bottling Machines">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent bg-opacity-50"></div>
            </div>

            <img src="/images/bubble-1.webp" alt="Planet Bottling Locations"
                 class="w-96 absolute -top-[12rem] -left-[12rem] hidden lg:block z-0">
        </div>

        {{----}}
        <div class="bg-dark ">
         <div class="container grid grid-cols-1 lg:grid-cols-2 gap-24 py-6 lg:py-12 ">
             <img src="/images/man.webp" alt="Planet Bottling Factory" class="w-[50rem] max-w-full">
             <div
                 class="text-center lg:text-right text-white flex flex-col items-center lg:items-end justify-center gap-12 ">
                 <h2 class="font-bold text-4xl lg:text-7xl">OUR <br class="hidden lg:block"> VALUES</h2>
                 <p class="font-light">
                     Our values at Planet Bottling Company encompass a steadfast commitment to innovation, integrity,
                     diversity and inclusion, quality, open communication, fostering career growth, a relentless passion
                     for excellence, and an unwavering focus on customer centrality and value centrality in all that we
                     do.
                 </p>
                 <a href="/who-we-are" class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</a>
             </div>
         </div>
        </div>
        {{----}}
        <div class="text-center grid grid-cols-1 gap-12">
            <h2 class="text-primary font-bold text-4xl lg:text-7xl">PROUDLY MADE <br> IN NIGERIA</h2>
            <p class="max-w-3xl px-4 mx-auto font-light text-text relative">
                Planet bottling manufactures and markets a range of beverages made entirely in Nigeria under the license
                from ‘the Monarch Beverages company, Atlanta, GA, USA’. Our brands are already present in over 60
                countries globally and 40 African countries.
                <img src="/images/bubble-1.webp" alt="Planet Bottling Locations"
                     class="w-64 absolute -top-[8rem] -right-[8rem] hidden lg:block">
            </p>
            <div class="flex justify-center">
                <a href="/global-presence" class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</a>

            </div>
            <img src="/images/new-map-last.png" alt="Planet Bottling Locations"
                 class="w-[50rem] max-w-[95%] mx-auto">
        </div>
        {{----}}
        {{----}}
        <div class="bg-dark relative">
            <div class="container py-24 items-center relative ">
                <div class="text-white grid grid-cols-1 gap-12 w-full lg:w-7/12">
                    <h2 class="font-bold text-4xl lg:text-7xl">GET IN TOUCH</h2>
                    <p class="font-light">
                        Whether you have a question or feedback about our wide range of high-quality products or need
                        assistance with sales or marketing related inquiries, our friendly and knowledgeable customer
                        support team is here to help. <br> Feel free to reach out to us through our convenient contact
                        form, and
                        we’ll get back to you promptly.
                    </p>
                    <div>
                        <a href="/get-in-touch" class="bg-primary text-white font-light px-6 py-2 rounded-full">Contact Us</a>

                    </div>
                </div>
                <img class="absolute -top-1/3 right-0 w-[32rem] hidden lg:block"
                     src="/images/chat-bubbles.webp"
                     alt="Planet Bottling Factory">

            </div>
        </div>

        {{----}}
        <x-brands></x-brands>
{{--        <x-integrates></x-integrates>--}}
    </div>
@endsection
