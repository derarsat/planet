@extends('layout')

@section('content')
    <style>
        .slick-prev:before, .slick-next:before {
            color: #008BC9;
        }
        @media (max-width: 540px) {
            .slick-prev{
                left: 0;
            }
            .slick-next{
                right: 0;
            }
        }

        .slick-slide:hover img.normal {
            opacity: 1;
        }
        .slick-slide:hover img.grey {
            opacity: 0;
        }
        .slick-current img.normal {
            opacity: 1;

        }
         .slick-current img.grey {
            opacity: 0;
        }
    </style>
    <div class="relative">
        <div class="min-h-[50vh] lg:min-h-[90vh] bg-center bg-cover" style="background-image: url('{{@App::make('url')->to('/') . '/storage/' . $product->heroImage}}')"> </div>
        <div
            class="absolute z-10 flex items-center justify-center inset-0 bg-gradient-to-t from-primary to-transparent ">
        </div>
    </div>
    <div class="relative bg-primary py-12 lg:py-24">
        <div class="max-w-4xl px-4 mx-auto">
            <h1 class="text-white font-semibold text-5xl text-center">
                THE STORY
            </h1>

            <p class="text-white  lg:px-0 mx-auto text-center mt-8 mb-24 font-light">
                {{$product->story}}
            </p>

            <div class="flex item-center justify-center gap-4 mb-12">
                <a target="_blank" href="{{$product->facebook}}"><img class="w-16" src="/images/social/facebook.png"/></a>
                <a target="_blank" href="{{$product->instagram}}"><img class="w-16" src="/images/social/instagram.png"/></a>
                <a target="_blank" href="{{$product->twitter}}"><img class="w-16" src="/images/social/twitter.png"/></a>
                <a target="_blank" href="{{$product->tiktok}}"><img class="w-16" src="/images/social/tiktok.png"/></a>
            </div>
            {{--        machine image--}}
            <img src="/images/machine.webp" class="w-full" alt="Planet Bottling Marketing"
            >
        </div>


        {{--        bubble-1 image--}}
        <img src="/images/bubble-1.webp" alt="Planet Bottling Marketing"
             class="w-96 hidden lg:block absolute top-0 right-0">
    </div>
    <div class="py-12 lg:py-24">
        <h1 class="text-primary font-semibold text-5xl text-center mb-12">
            PRODUCT <br> HISTORY
        </h1>

        <div class="max-w-4xl px-4 mx-auto grid grid-cols-1 lg:grid-cols-2  gap-4 lg:gap-12 items-center">
            <div class="relative">
                {{--                bubble image--}}
                <img src="/images/bubble-1.webp" alt="Planet Bottling Marketing"
                     class="w-44 absolute -top-20 -left-20">
                <img class="w-full " src="{{@App::make('url')->to('/') . '/storage/' . $product->historyImage}}"
                     alt="{{$product->title}}">
            </div>
            <p class="text-center lg:text-left">
                {{$product->history}}
            </p>
        </div>
        <div class="max-w-7xl px-4 lg:px-0 mx-auto relative">
            <img src="/images/bubble-1.webp" alt="Planet Bottling Marketing"
                 class="w-96 absolute -top-20 -right-20">
            <h1 class="text-primary font-semibold text-5xl text-center mb-12 mt-24 ">
                THE FLAVORS
            </h1>
            <p class="text-center">
                {{$product->title}} celebrates diversity through a world of tastes while bringing Nigerians closer
                together.
            </p>


            <div class="responsive max-w-7xl mx-auto px-8 relative lg:px-0 mt-12">
                @foreach($product->productFlavors as $flavor)
                  <div class="p-4">
                      <div class="aspect-square relative">
                          <img src="{{@App::make('url')->to('/') . '/storage/' . $flavor->hover_image  }}"
                               class="normal w-full h-full absolute inset-0 transition duration-1000 opacity-0" alt="{{$flavor->title}}"/>
                          <img src="{{@App::make('url')->to('/') . '/storage/' . $flavor->image  }}"
                               class="grey absolute w-full h-full inset-0 transition duration-1000 opacity-100" alt="{{$flavor->title}}"/>
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        $('.responsive').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            // dots: true,
            // centerMode: true,
            arrows: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        })
    </script>
@endsection
