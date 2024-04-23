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

    <div class="container">
        <div class="slider">
            @foreach($events as $event)
             <div class="p-4">
                 <div class="relative aspect-square">
                     <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent flex justify-end p-4 flex-col text-white">
                         <h1 class="font-medium text-lg">{{$event->title}}</h1>
                         <h1>{{$event->content}}</h1>
                     </div>
                     <img class="w-full h-full" src="{{@App::make('url')->to('/') . '/' . $event->image  }}" alt="{{$event->title}}">
                 </div>
             </div>
            @endforeach
        </div>
    </div>



    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToScroll: 4,
            dots: true,
            arrows: true,
        });

    </script>
@endsection
