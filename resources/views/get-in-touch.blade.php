@extends('layout')
@section('content')
    <style>
        .slick-dots li button:before, .slick-dots li.slick-active button:before {
            color: #fff;
        }
    </style>
    <div class="relative h-[85vh] bg-center bg-cover"
         style="background-image: url('/images/factory.webp')">
        <div
            class="absolute z-10 flex items-center justify-center inset-0 bg-gradient-to-t from-primary from-0% to-40%  to-transparent ">
            <h1 class="text-white font-semibold text-5xl text-center">
                Get in Touch With <br> Planet Bottling
            </h1>
        </div>
    </div>

    <div class="bg-primary py-24">
        <h1 class="text-white font-semibold text-5xl text-center">
            Join <br> The Team
        </h1>

        <h2 class="text-white text-center mt-3">Open Positions</h2>
        {{--TODO add team--}}
        <style>
            .slick-current{
                transform: scale(1.1);
                transition: transform 0.5s;
            }
        </style>
        <div class="responsive max-w-7xl mx-auto px-4 lg:px-0 mt-12">
            @foreach($positions as $position)
                <div class="p-4">
                    <div class="">
                        <img src="{{@App::make('url')->to('/') . '/storage/' . $position->image  }}"
                             class="w-full aspect-square "/>
                        <h1 class="text-white mt-3 text-lg text-center">
                            {{$position->title}}
                        </h1>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex items-center justify-center">

            <a href="/form/team" class="bg-white text-primary rounded-full px-6 py-3 mx-auto block mt-8">
                Apply Now
            </a>
        </div>
    </div>


    <div class="max-w-7xl mx-auto py-12 px-4 lg:px-0">
        <h1 class="text-primary font-semibold text-5xl text-center ">
            MARKETING
        </h1>

        <p class="text-center text-dark mt-6 mb-12">
            Our marketing team comprises experienced, creative, and career-driven <br> individuals who are dedicated to
            promoting our unique, marketable, and top-quality products through strong, <br> tested, and proven marketing
            strategies.
        </p>
        <div class="flex justify-center">
            <a href="/form/marketing" class="bg-primary mx-auto inline-block text-white px-4 py-2 rounded-full mb-8">Contact Us</a>
        </div>

        <img src="/images/marketing.webp" alt="Planet Bottling Marketing" class="w-full">
    </div>

    <div>
        <h1 class="text-primary font-semibold text-5xl text-center ">
            Sales
        </h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center max-w-7xl px-4 lg:px-0 py-6 lg:py-0">
            <img src="/images/bubble-1.webp" alt="Planet Bottling Marketing"
                 class="w-full hidden lg:block">
            <div>
                <p class="font-light">
                    Be leaders of innovation in Nigeria the giant of Africa, as we build and maintain consumer standards
                    for
                    generations of value-driven approach while continuously searching for the best.
                </p>
                <a href="/form/sales" class="bg-primary inline-block text-white px-4 py-2 rounded-full mt-4">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="bg-dark py-12 px-4 lg:px-0">
        <form action="" class="max-w-4xl mx-auto relative">
            <img src="/images/bubble-1.webp"
                 class="h-full aspect-square absolute -top-24 -right-[14%] hidden lg:block">
            <h1 class="text-white font-semibold text-5xl text-center ">
                YOUR FEEDBACK MATTERS
            </h1>
            <div class="flex flex-col gap-4 mt-8">
                <input required type="text" placeholder="Full Name">
                <input required type="email" placeholder="Email">
                <input required type="text" placeholder="Subject">
                <textarea required placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="">
                <button class="bg-primary text-white rounded-full px-8 py-3  mt-8">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        $('.responsive').slick({
            dots: true,
            centerMode: true,
            arrows: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        })
    </script>
@endsection
