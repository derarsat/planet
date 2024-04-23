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

    <div class="py-12 max-w-6xl px-4 lg:px-0 mx-auto">
        <h1 class="text-primary  text-4xl lg:text-7xl text-center">
            LATEST NEWS
        </h1>
        <p class="mt-8 mb-12 text-center">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.

        </p>

        <style>
            .news .slick-current {
                transform: scale(1.1);
                transition: transform 0.5s;
            }
            .news .slick-current p{
                display: block;
            }
            .news .slick-current .over{
                background: rgba(0, 0, 0, 0);
            }
        </style>
        <div class="news">
            @foreach($news as $new)
                <div class="p-4 slide ">
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary/40 over">

                        </div>
                        <img class="w-full" src="{{@App::make('url')->to('/') . '/storage/' . $new->image  }}"
                             alt="{{$new->title}}">
                    </div>
                    <p class="mt-6 hidden text-center content">{{$new->content}}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="py-12 max-w-6xl px-4 lg:px-0 mx-auto">
        <h1 class="text-primary  text-4xl lg:text-7xl text-center mb-8">
            EVENTS
        </h1>
        <div class="events">
            @foreach($events as $event)
                <div class="p-4" onclick="setEvent({{$event}})">
                    <div class="relative aspect-square">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary to-transparent flex justify-end p-4 flex-col text-white">
                            <h1 class="font-medium text-lg">{{$event->title}}</h1>
                            <h3 class="line-clamp-2">{{$event->content}}</h3>
                        </div>
                        <img class="w-full h-full" src="{{@App::make('url')->to('/') . '/' . $event->image  }}"
                             alt="{{$event->title}}">
                        p
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div id="modal" class="fixed  z-10 inset-0 bg-black bg-opacity-50 hidden items-center justify-center ">
        <div class="bg-white px-6 py-12 rounded-2xl w-[42rem] max-w-[98vw] relative max-h-[90vh] overflow-y-auto">
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
            $("#image-wrap").html("<img src='{{@App::make('url')->to('/') . '/'}}" + event.image + "' class='w-full' alt='" + event.title + "'>")
        }

        $('.news').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            speed: 300,
            centerMode: {{count($news) > 5 ? 'true' : 'false'}},
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
            dots:true,
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
