@extends('layout')
@section('content')
    <div class="relative h-[85vh] bg-center bg-cover"
         style="background-image: url('images/global-presence-hero.webp')">
        <div class="absolute z-10 flex items-center justify-center inset-0 bg-black bg-opacity-30">
            <h1 class="text-white font-semibold text-5xl text-center uppercase uppercase">
                mastering bottling <br> for global
            </h1>
        </div>
    </div>
    <div class="py-12 max-w-7xl px-4 lg:px-0 mx-auto">
        <h1 class="text-primary font-bold text-4xl lg:text-7xl text-center">
            PBC GOES global
        </h1>
        <p class="mt-8 mb-12 text-center">
            Planet bottling manufactures and markets a range of beverages made entirely in Nigeria <br> under the license
            from ‘the Monarch Beverages company, Atlanta, GA, USA’.

        </p>
        <img src="/images/brands-table.webp" alt="">


        <div>
            <h1 class="text-primary text-center mt-12 lg:mt-24 mb-6 text-lg">
                Our brands are already present in over 60 countries globally and
                40 African countries.
            </h1>
        </div>
        <img src="/images/new-map-last.png" alt="Planet Bottling Locations"
             class="w-[50rem] max-w-full mx-auto mt-12">

    </div>
@endsection
