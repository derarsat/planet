@extends('layout')

@section('content')
    <img src="images/brands-banner.webp" alt="Planet Bottling Brands"/>

    <div class="container py-12 grid grid-cols-1 gap-12 text-dark">
        @foreach($brands as $brand)
            <div class="bg-grey rounded-2xl p-6 lg:p-12 grid grid-cols-3 gap-12 lg:gap-24">
                <div class="order-2 lg:order-1 flex col-span-3 lg:col-span-2 flex-col items-start justify-between">
                    <div class="flex flex-col gap-4">
                        <h1 class="text-3xl font-semibold">
                            {{$brand->title}}
                        </h1>
                        <p class="font-light">
                            {{$brand->description}}
                        </p>
                    </div>
                    <a href="/product/{{isset($brand->products) ?? $brand->products[0]->id}}"
                       class="bg-primary text-white px-4 py-2 rounded-full mt-6 lg:mt-0">Learn More</a>
                </div>
                <img class="order-1 lg:order-2 w-full col-span-3 lg:col-span-1"
                     src="{{@App::make('url')->to('/') . '/storage/' . $brand->image}}" alt="{{$brand->title}}">
            </div>

        @endforeach
    </div>
@endsection
