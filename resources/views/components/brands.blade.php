{{----}}
<div class="text-center grid grid-cols-1 gap-12 pb-24">
    <h2 class="text-primary font-bold text-4xl lg:text-7xl">OUR BRANDS</h2>
    <p class="max-w-3xl px-4 mx-auto font-light text-text relative">
        At Planet Bottling Company, we take pride in bringing you a diverse selection of affordable quality
        beverages with a unique taste that cater to all. From refreshing carbonated soft drinks to functional
        energy drinks, our range is thoughtfully crafted to provide you with a delightful beverage experience.
        We source the finest ingredients to ensure each sip is filled with authentic flavors and utmost
        satisfaction. <br> <br> With a strong commitment to quality and affordability, our beverages are the
        perfect
        choice for discerning consumers seeking exceptional taste at a reasonable price.
        <img src="/images/logo-white.webp" alt="Planet Bottling Locations"
             class="w-64 absolute -top-[8rem] -right-[8rem] hidden lg:block">
    </p>
    <div class="flex justify-center">
        <a href="/brands" class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</a>

    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-16 container py-6 lg:py-0 max-w-7xl">
        @foreach($brands as $brand)

            <a href="{{ count($brand->products) > 0 ? '/product/' . $brand->products[0]->id : '#'}}" class="aspect-square group relative rounded-3xl overflow-hidden">
                <img src="{{@App::make('url')->to('/') . '/storage/' . $brand->greyscaleImage  }}" class="absolute inset-0 h-full w-full opacity-100 aspect-square transition duration-1000 group-hover:opacity-0"/>
                <img src="{{@App::make('url')->to('/') . '/storage/' . $brand->image  }}" class="absolute inset-0 opacity-0 w-full h-full transition duration-1000 group-hover:opacity-100"/>
            </a>
        @endforeach
    </div>
</div>
{{----}}
