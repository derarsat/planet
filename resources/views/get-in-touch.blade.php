@extends('layout')
@section('content')
    <style>
        .slick-dots li button:before, .slick-dots li.slick-active button:before {
            color: #fff;
        }
    </style>
    <div class="max-w-screen overflow-x-hidden">
        <div class="relative h-[85vh] bg-center bg-cover"
             style="background-image: url('/images/factory.webp')">
            <div
                class="absolute z-10 flex items-center justify-center inset-0 bg-gradient-to-t from-primary from-0% to-40%  to-transparent ">
                <h1 class="text-white font-semibold text-5xl text-center uppercase">
                    Get in Touch With <br> Planet Bottling
                </h1>
            </div>
        </div>

        <div class="bg-primary py-24">
            <h1 class="text-white  text-5xl text-center uppercase">
                Join <br> The Team
            </h1>

            <h2 class="text-white text-center mt-3">Open Positions</h2>
            {{--TODO add team--}}
            <style>
                .slick-current {
                    transform: {{count($positions) > 5 ? 'scale(1.1)' : '' }} ;
                    transition: transform 0.5s;
                }
            </style>
            <div class="responsive max-w-7xl mx-auto px-4 lg:px-0 mt-12">
                @foreach($positions as $position)
                    <div class="p-4" >
                        <div class="desc-wrap" data-desc="{{$position->description}}">
                            <img src="{{@App::make('url')->to('/') . '/storage/' . $position->image  }}"
                                 class="w-full aspect-square "/>
                            <h1 class="text-white mt-3 text-lg text-center">
                                {{$position->title}}
                            </h1>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="active text-white mx-auto px-4 max-w-3xl text-center"></div>
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

            <p class="text-center text-dark mt-6 mb-12 max-w-3xl px-4 mx-auto">
                Our marketing team is comprised of experienced, creative, and career-driven individuals who are dedicated to promoting our unique, marketable, and top-quality products through strong, tested, and proven marketing strategies
            </p>
            <div class="flex justify-center">
                <a href="/form/marketing"
                   class="bg-primary mx-auto inline-block text-white px-4 py-2 rounded-full mb-8">Contact
                    Us</a>
            </div>

            <img src="/images/marketing.webp" alt="Planet Bottling Marketing" class="w-full">
        </div>

        <div>
            <h1 class="text-primary font-semibold text-5xl text-center uppercase ">
                Sales
            </h1>

            <div class=" mx-auto max-w-7xl px-4 lg:px-0 py-12 relative">
                <img src="/images/bubble-1.webp" alt="Planet Bottling Marketing"
                     class=" hidden lg:block absolute -left-[16rem] -top-[8rem] w-[32rem]">
                <div class="flex items-center justify-center gap-12 flex-wrap lg:flex-nowrap">
                    <img src="/images/s2.webp"
                         class="w-[42rem] max-w-full ">

                    <div>
                        <p class="font-light">
                            Our sales team is a dynamic and results-oriented group of professionals, driven to excel and deliver exceptional results. With a deep understanding of our unique, marketable, and top-quality products, they employ their expertise to build strong customer relationships and drive sales growth. Leveraging their proven sales strategies, our team consistently achieves targets and ensures our products reach and satisfy customers far and wide
                        </p>
                        <a href="/form/sales" class="bg-primary inline-block text-white px-4 py-2 rounded-full mt-4">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark py-12 px-4 lg:px-0">
            <form action="" class="max-w-6xl mx-auto relative px-4 lg:px-0 ">
                <img src="/images/bubble-1.webp"
                     class="h-full aspect-square absolute -top-24 -right-[14%] hidden lg:block">

                <div class="flex items-stretch flex-wrap justify-between gap-8 w-full">
                    <img src="/images/your-feedback.webp" alt="Your feedback" class="w-full lg:w-[20rem]">
                    <div class="flex-grow">
                        <h1 class="text-white font-semibold text-5xl text-center uppercase opacity-80 uppercase ">
                            Your feedback matters
                        </h1>
                        <div class="flex flex-col gap-4 mt-8">
                            <input required type="text" placeholder="Full Name">
                            <input required type="email" placeholder="Email">
                            <input required type="text" placeholder="Subject">
                            <textarea required placeholder="Message" name="" id="" class="h-40"></textarea>
                        </div>
                        <div class="">
                            <button class="bg-primary text-white rounded-full px-8 py-3  mt-8">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script>
        $('.responsive').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 4000,
            centerMode: {{count($positions) > 5 ? 'true' : 'false'}},
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

        $(".responsive").on("beforeChange", function (){
            const wrap = $(".slick-active").find($(".desc-wrap"))
            $('.active').html(wrap.attr('data-desc'))
        })
        $(".active").html($($(".slick-active")[0]).find($(".desc-wrap")).attr('data-desc'))
    </script>
@endsection
