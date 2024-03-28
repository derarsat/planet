@extends('layout')

@section('content')
{{--    <img src="/images/brands-banner.webp" alt="Planet Bottling Brands"/>--}}
    <div class="min-h-[60vh] lg:min-h-[90vh] bg-left bg-cover" style="background-image: url('/images/brands-banner.webp')"> </div>
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
                 class="dis-cat bg-grey rounded-2xl flex items-center flex-wrap gap-8 p-4 lg:p-8">
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

                // Check if the category already exists in the array
                if ($.inArray(category, categories) === -1) {
                    categories.push(category); // Add unique category to the array
                } else {
                    $(this).remove(); // Remove duplicate button
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
                    if ($(this).attr('data-category') === category) {
                        $(this).show()
                    } else {
                        $(this).hide()
                    }
                })
            })
        });
    </script>
@endsection
