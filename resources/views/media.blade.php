@extends('layout')

@section('content')
    <div class="relative h-[85vh] bg-center bg-cover"
         style="background-image: url('images/machine-global.webp')">
        <div class="absolute z-10 flex items-center justify-center inset-0 bg-black bg-opacity-30">
            <h1 class="text-white font-semibold text-5xl text-center ">
                Unmatched Expertise <br>Get in touch
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="slider">
            @foreach($events as $event)
                <h1>{{$event->title}}</h1>
                <img src="{{@App::make('url')->to('/storage') . '/' . $event->image}}" alt="">
            @endforeach
        </div>
    </div>



    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: true,
        });

    </script>
@endsection
