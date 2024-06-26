@extends('layout')

@section('content')
    <div class="relative h-[85vh] bg-center bg-cover"
         style="background-image: url('images/machine-global.webp')">
        <div class="absolute z-10 flex items-center justify-center inset-0 bg-black bg-opacity-30">
            <h1 class="text-white font-semibold text-5xl text-center uppercase ">
                Unmatched Expertise <br>Get in touch
            </h1>
        </div>
    </div>
{{--    <div class="py-12 max-w-6xl px-4 lg:px-0 mx-auto">--}}
{{--        <h1 class="text-primary  text-4xl lg:text-7xl text-center">--}}
{{--            LATEST NEWS--}}
{{--        </h1>--}}
{{--        <p class="mt-8 mb-12 text-center">--}}
{{--            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et--}}
{{--            dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed--}}
{{--            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.--}}

{{--        </p>--}}

{{--        <style>--}}
{{--            .news .slick-current {--}}
{{--                transform: scale(1.1);--}}
{{--                transition: transform 0.5s;--}}
{{--            }--}}

{{--            .news .slick-current p {--}}
{{--                display: block;--}}
{{--            }--}}

{{--            .news .slick-current .over {--}}
{{--                background: rgba(0, 0, 0, 0);--}}
{{--            }--}}
{{--        </style>--}}
{{--        <div class="news">--}}
{{--            @foreach($news as $new)--}}
{{--                <div class="p-4 slide ">--}}
{{--                    <div class="relative rounded-3xl overflow-hidden">--}}
{{--                        <div class="absolute inset-0 bg-primary/40 over">--}}

{{--                        </div>--}}
{{--                        <img class="w-full rounded-3xl"--}}
{{--                             src="{{@App::make('url')->to('/') . '/storage/' . $new->image  }}"--}}
{{--                             alt="{{$new->title}}">--}}
{{--                    </div>--}}
{{--                    <p class="mt-6 hidden text-center content">{{$new->content}}</p>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="py-12 bg-dark text-white">
        <div class="max-w-4xl px-4 mx-auto text-center ">
            <h1 class="  text-4xl lg:text-7xl mb-8 ">
                PBC SOCIALS
            </h1>
            <p>
                Connect with us on social media to stay updated with the latest news, events, and promotions across our
                brands! Join our vibrant community to engage with us, share your experiences, and be part of the Planet
                Bottling Company family.
            </p>
            <div class="flex items-center justify-center mt-12 gap-8">
                <a href="https://www.facebook.com/share/mfvaX25PNFY8qd8a/?mibextid=LQQJ4d" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 50 50">
                        <path fill="white"
                              d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/pbcnigeria?igsh=ZjVodXBjNmw0ZHdu" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 50 50">
                        <path fill="white"
                              d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/planetbottlingcompany" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60"
                         viewBox="0 0 50 50">
                        <path
                            fill="white"
                            d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@pbcnigeria" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 30 30">
                        <path
                            fill="white"
                            d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="py-12 max-w-6xl px-4 lg:px-0 mx-auto">
        <h1 class="text-primary  text-4xl lg:text-7xl text-center mb-8">
            EVENTS
        </h1>

        <div class="events">
            @foreach($events as $event)
                <div class="p-4" onclick="setEvent({{$event}})">
                    <div class="relative aspect-square rounded-3xl overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary to-transparent flex justify-end p-4 flex-col text-white">
                            <h1 class="font-medium text-lg">{{$event->title}}</h1>
                            <h3 class="line-clamp-2">{{$event->content}}</h3>
                        </div>
                        <img class="w-full h-full rounded-3xl"
                             src="{{@App::make('url')->to('/') . '/' . $event->image  }}"
                             alt="{{$event->title}}">
                        p
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div id="modal" class="fixed  z-10 inset-0 bg-black bg-opacity-50 hidden items-center justify-center ">
        <div class="bg-white px-6 py-12 rounded-3xl w-[42rem] max-w-[98vw] relative max-h-[90vh] overflow-y-auto">
            <button id="close" class="absolute top-4 right-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
            <div class="grid grid-cols-1 gap-4">
                <h1 class="text-primary text-3xl" id="title"></h1>
                <h1 id="desc"></h1>
                <div id="image-wrap">
                </div>
            </div>
        </div>
    </div>





    <script>
        $("#close").click(function () {
            $("#modal").css("display", "none")
        });

        function setEvent(event) {
            $("#modal").css("display", "flex")
            $("#title").text(event.title)
            $("#desc").text(event.content)
            $("#image-wrap").html("<img src='{{@App::make('url')->to('/') . '/'}}" + event.image + "' class='w-full rounded-3xl' alt='" + event.title + "'>")
        }

        $('.news').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            infinite: true,
            speed: 300,
            centerMode: {{count($news) > 4 ? 'true' : 'false'}},
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        })
        $('.events').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            dots: true,
            speed: 300,
            centerMode: {{count($events) > 5 ? 'true' : 'false'}},
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        })
    </script>
@endsection
