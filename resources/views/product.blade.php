@extends('layout')

@section('content')
    <style>
        .slick-prev:before, .slick-next:before {
            color: #008BC9;
        }

        @media (max-width: 540px) {
            .slick-prev {
                left: 0;
            }

            .slick-next {
                right: 0;
            }
        }

        .content {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .slick-slide:hover img.normal {
            opacity: 1;
        }

        .slick-slide:hover .content {
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
        <div class="min-h-[50vh] lg:min-h-[90vh] bg-center bg-cover"
             style="background-image: url('{{@App::make('url')->to('/') . '/storage/' . $product->heroImage}}')"></div>
        <div
            class="absolute z-10 flex items-center justify-center inset-0 bg-gradient-to-t from-primary to-transparent ">
        </div>
    </div>
    <div class="relative bg-primary py-12 lg:py-24">
        <div class="max-w-4xl px-4 mx-auto">
            <h1 class="text-white font-semibold text-5xl text-center uppercase">
                THE STORY
            </h1>

            <p class="text-white  lg:px-0 mx-auto text-center mt-8 mb-24 font-light">
                {{$product->story}}
            </p>

            <div class="flex item-center justify-center gap-4 mb-12">
                <a target="_blank" href="{{$product->facebook}}"><img class="w-16"
                                                                      src="/images/social/facebook.png"/></a>
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
                    <div class="p-4" onclick="setActive({{$flavor}})">
                        <div class="aspect-square relative">
                            <img src="{{@App::make('url')->to('/') . '/storage/' . $flavor->hover_image  }}"
                                 class="normal w-full h-full absolute inset-0 transition duration-1000 opacity-0"
                                 alt="{{$flavor->title}}"/>
                            <img src="{{@App::make('url')->to('/') . '/storage/' . $flavor->image  }}"
                                 class="grey absolute w-full h-full inset-0 transition duration-1000 opacity-100"
                                 alt="{{$flavor->title}}"/>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center ">
        <div class="bg-white px-6 py-12 rounded-2xl w-[62rem] max-w-[98vw] relative">
            <button id="close" class="absolute top-4 right-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>

            </button>


            <div class="grid grid-cols-2 gap-12 items-center">
                <div id="image-wrap">

                </div>
                <div class="grid grid-cols-1 gap-4">
                    <h1 class="text-center text-3xl" id="title"></h1>
                    <div>
                        <h1 class='text-center text-xl mb-2 underline text-primary'>Nutritional Values</h1>
                        <div id="content" class="rounded-3xl border-2 border-primary overflow-hidden">
                        </div>
                    </div>
                    <div>
                        <h2 class="underline mb-2">Ingredient Details</h2>
                        <p id="details"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        {{--        zibra table --}}
        table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        $("#close").click(function () {
            $("#modal").css("display", "none")
        })
        // setActive(
        //     {
        //         "id": 8,
        //         "product_id": 1,
        //         "title": "Title",
        //         "image": "product-flavors/2b7624abea7e28cee634cb55b6632fb5.png",
        //         "created_at": "2024-03-27T22:25:21.000000Z",
        //         "updated_at": "2024-04-23T16:52:42.000000Z",
        //         "hover_image": "product-flavors/92410d50581792f3dfd6b5852311fa6b.png",
        //         "description": "Long alksdj a;sdj laskdj laskdh aksdj hlaskdh",
        //         "ingredient_details": "adlk jaslkd jasldk jaslkd jlaksjlkjdlkasjdkjasb askdjhaskjd ha sd askjdhkaj sdha sdaskljdh alksjdh kashd jkahd",
        //         "headers": "header1,header2,header3",
        //         "values": "value1,value2,value3,value4,value5,value6,value7,value8,value9,value1,value2,value3,value4,value5,value6,value7,value8,value9"
        //     }
        // )

        function setActive(flavor) {
            console.log(flavor)
            $("#image-wrap").html("<img src='{{@App::make('url')->to('/') . '/storage/'}}" + flavor.image + "' class='w-full' alt='" + flavor.title + "'>")
            $("#title").text(flavor.title)
            // headers are comma separated values create table inside #content
            let headers = flavor.headers.split(",")
            let values = flavor.values.split(",")

            let table = "<table class='w-full'> <thead>"
            table += "<tr class='bg-primary text-white text-center '>"
            for (let i = 0; i < headers.length; i++) {
                table += "<th class='py-4'>" + headers[i] + "</th>"
            }
            table += "</tr>"
            table += "</thead>"
            table += "<tbody>"
            for (let i = 0; i < values.length; i++) {
                if (i % headers.length === 0) {
                    table += "<tr>"
                }
                table += "<td class='py-2 text-center'>" + values[i] + "</td>"
            }
            table += "</tbody>"
            table += "</table>"
            $("#content").html(table)
            $("#details").text(flavor.ingredient_details)
            $("#modal").css("display", "flex")

        }

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
