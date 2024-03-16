<div class="bg-dark px-4 lg:px-0 py-12 lg:py-24 mb-12">
    <div class="mb-12 max-w-7xl mx-auto px-4 lg:px-0">
        <h1 class="text-white font-semibold text-4xl lg:text-7xl text-center uppercase">Integrity <br>in Action</h1>
        <h2 class="text-white text-center mt-4 mb-12">OUR VALUES</h2>
        <style>
            .slick-dots{
                bottom: -50px;
            }
            .slick-dots li button:before, .slick-dots li.slick-active button:before {
                color: #fff;
            }
            #int-wrap .slick-slide:hover img.normal {
                opacity: 1;
            }
            #int-wrap .slick-slide:hover img.grey {
                opacity: 0;
            }
            #int-wrap .slick-current img.normal {
                opacity: 1;

            }
            #int-wrap .slick-current img.grey {
                opacity: 0;
            }
            .slick-slide{
                transition: all 1s;
            }
            #int-wrap .slick-current{
                transform: scale(1.3);

                z-index: 1;
            }
        </style>
        <div class="responsive max-w-7xl mx-auto px-4 lg:px-0" id="int-wrap">
            @foreach($integrates as $integrate)
                <div class="p-4 lg:p-8 overflow-hidden">
                    <div class="p-4 lg:p-8 aspect-square  relative overflow-hidden">
                        <img src="{{@App::make('url')->to('/') . '/storage/' . $integrate->image  }}"
                             class="normal absolute inset-0 transition duration-1000 opacity-0" alt="{{$integrate->title}}"/>
                        <img src="{{@App::make('url')->to('/') . '/storage/' . $integrate->grey_scale_image  }}"
                             class="grey absolute inset-0 transition duration-1000 opacity-100" alt="{{$integrate->title}}"/>
                        <h1 class="text-white mt-3   text-lg text-center">
                            {{$integrate->title}}
                        </h1>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
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
                    slidesToShow: 1,
                }
            }
        ]
    })
</script>
