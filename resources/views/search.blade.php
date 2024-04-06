@extends('layout')
@section('content')
    <div class="bg-[#7BC3E3] container py-12 text-2xl capitalize">
        {{count($products) == 0 ? 'No Results Found ' : count($products) . ' results found for ' . $query}}
    </div>
    @if(count($products) > 0)

    <div class="max-w-4xl mx-auto px-4 grid grid-cols-4 gap-4 py-24">
        @foreach($products as $product)
            <a href="/product/{{$product->id}}" class="aspect-square rounded-xl overflow-hidden">
                <img
                    src="{{@App::make('url')->to('/') . '/storage/' . $product->image  }}"
                    alt="{{$product->title}}" class="w-full h-full">
            </a>
        @endforeach
    </div>
    @endif

@endsection
