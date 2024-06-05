@extends('layout')

@section('content')
{{--    <img src="/images/brands-banner.webp" alt="Planet Bottling Brands"/>--}}
<div class="heroes">
    @foreach($heroes as $hero)
        <img src="{{@App::make('url')->to('/') . '/storage/' . $hero->image  }}" alt="">
    @endforeach
</div>
    <div class="container flex items-center justify-center gap-4 flex-wrap mt-8">
        <button class="cat px-4 py-2 rounded-full bg-primary text-white">All Products</button>
        @foreach($brands as $brand)
            {{--Unique brand categories--}}
            <button class="px-4 py-2 rounded-full cat ">{{$brand->category}}</button>
        @endforeach
    </div>
    <div class="max-w-7xl mx-auto py-12 grid grid-cols-1 gap-4 lg:gap-12 text-dark px-4 lg:px-0">
        @foreach($brands as $brand)
            <div data-category="{{$brand->category}}"
                 class="dis-cat bg-grey rounded-3xl flex items-center lg:flex-nowrap flex-wrap gap-8 p-4 lg:p-8">
                <div class="order-2 lg:order-1 flex col-span-3 lg:col-span-2 flex-col items-start justify-between">
                    <div class="flex flex-col gap-4">
                        <h1 class="text-3xl lg:text-5xl font-semibold">
                            {{$brand->title}}
                        </h1>
                        <p class="font-light">
                            {{$brand->description}}
                        </p>
                    </div>
                    @if(count($brand->products) > 0)
                        <a href="/product/{{$brand->products[0]->id}}"
                           class="bg-primary text-white px-4 py-2 rounded-full mt-6">Learn More </a>

                    @endif
                </div>
                <div class="aspect-[462/285] w-full flex-shrink-0 lg:w-96 group relative rounded-3xl overflow-hidden">
                    <img src="{{@App::make('url')->to('/') . '/storage/' . $brand->hero  }}"
                         class="absolute inset-0 h-full w-full opacity-100 aspect-square transition duration-1000 group-hover:opacity-0"/>
                    <img src="{{@App::make('url')->to('/') . '/storage/' . $brand->greyscaleHero  }}"
                         class="absolute inset-0 opacity-0 w-full h-full transition duration-1000 group-hover:opacity-100"/>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $(document).ready(function () {
            var categories = [];
            $('.cat').each(function() {
                var category = $(this).text().trim();
                if ($.inArray(category, categories) === -1) {
                    categories.push(category);
                } else {
                    $(this).remove();
                }
            });
            $('.cat').click(function () {
                const category = $(this).text().toLowerCase()
                if (category === 'all products') {
                    $('.dis-cat').show()
                    return
                }
                $(this).addClass('bg-primary text-white')
                $(this).siblings().removeClass('bg-primary text-white')
                $('.dis-cat').each(function () {
                    if ($(this).attr('data-category').toLowerCase() === category.toLowerCase()) {
                        $(this).show()
                    } else {
                        $(this).hide()
                    }
                })
            })
        });
        $('.heroes').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            dots: true,
            speed: 300,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        })
    </script>
@endsection
