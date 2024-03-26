@if(isset($entry->image))
    <img src="{{@App::make('url')->to('/') . '/storage/' . $entry->greyscaleHero  }}" width="120"/>
@endif
