<div class="bg-dark py-12 lg:py-24 mb-12">
    <div class="mb-12 max-w-7xl mx-auto px-4 lg:px-0">
        <h1 class="text-white font-semibold text-5xl text-center">Integrity <br>in Action</h1>
        <h2 class="text-white text-center mt-4 mb-12">OUR VALUES</h2>

        <div class="responsive max-w-7xl mx-auto px-4 lg:px-0">
            @foreach($integrates as $integrate)
                <div class="p-4">
                    <div class="p-4">
                        <img src="{{@App::make('url')->to('/') . '/storage/' . $integrate->image  }}"
                             class="w-full aspect-square rounded-full"/>
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
        // centerMode: true,
        arrows: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
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
