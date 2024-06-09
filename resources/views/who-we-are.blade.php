@extends('layout')

@section('content')

    <style>
        .slick-dots li button:before, .slick-dots li.slick-active button:before {
            color: #fff;
        }
    </style>
    <div class="grid grid-cols-1">
        {{----}}
        <div class=" text-center flex flex-col justify-center items-center pt-16">
            <h2 class="text-primary font-bold text-4xl lg:text-7xl relative z-10 ">

                <img src="/images/bubble-1.webp"
                     class="w-[26rem] z-10 absolute -bottom-40 -left-[18rem] hidden lg:block">

                TAKING BOTTLING <br>TO NEW LEVELS </h2>
            <p class="max mt-12 px-4 mx-auto font-light text-text z-10">
                With the highest ultra modern production capacity, <br> we have set out to meet the growing demand for
                quality <br> and value in the Nigerian market.
            </p>
            <div class="relative">
                <img class="w-screen mx-auto mt-24" src="/images/who-we-are.png"
                     alt="Planet Bottling Hero">

                <img src="/images/bubble-1.webp"
                     class="w-44 absolute top-80 left-12 hidden lg:block">
            </div>
        </div>
        {{----}}
        <div class="from-primary to-white bg-gradient-to-b py-12 lg:py-24  ">

            <div class="container  text-white text-center relative">
                <img src="/images/bubble-1.webp"
                     class="w-[26rem] z-10 absolute right-0 -top-[20rem] hidden lg:block">
                <h2 class=" font-bold text-4xl lg:text-7xl relative z-10 ">
                    CRAFTING <br>PERFECTION </h2>
                <p class="text-white uppercase font-medium my-6 text-xl">
                    Our Mission
                </p>
                <p class="text-dark my-6 px-4 mx-auto font-light  z-10 relative">
                    <img src="/images/bubble-1.webp"
                         class="w-64 z-10 absolute left-0 -top-32 hidden lg:block">
                    To produce affordable quality beverages and provide excellence to Nigerians <br> while actively
                    ensuring
                    consumers remember us by our value, <br> the unique taste and design of our products.
                </p>

                <div class="max-w-5xl mx-auto relative rounded-3xl overflow-hidden">
                    <img src="/images/machine-2.webp" alt="Planet Bottling Machines"
                         class="w-full">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent bg-opacity-50"></div>
                </div>
            </div>
        </div>
        {{----}}
        <div class="text-primary container flex-col flex items-center justify-center gap-12 text-center">
            <h2 class=" font-bold text-4xl lg:text-7xl relative z-10 ">
                ENVISIONING <br> BRILLIANCE

                <img src="/images/bubble-1.webp"
                     class="w-64 z-10 absolute -right-64 top-0 hidden lg:block">
            </h2>
            <p class=" uppercase font-medium mb-6 text-xl">
                Our Vision
            </p>
            <div class="w-full relative pb-12 text-center">
                <img src="/images/bubble-1.webp"
                     class="w-96 absolute left-0 -top-64 hidden lg:block">
                <div class="flex items-center justify-center gap-12 flex-wrap">
                    <img src="/images/m.webp"
                         class="w-[32rem] max-w-full ">
                    <p class="font-light text-dark text-center lg:text-left lg:mt-0">
                        Be leaders of innovation in Nigeria the giant capital of Africa, <br>
                        as we build and maintain consumer standards for <br>
                        generations of value-driving approach while <br>
                        continuously searching for the best.
                    </p>
                </div>

            </div>
        </div>
        <x-integrates></x-integrates>
        {{----}}
        <x-brands></x-brands>
    </div>

@endsection
