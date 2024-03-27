@if(isset($entry->image))
    <img src="{{@App::make('url')->to('/') . '/storage/' . $entry->hover_image  }}" width="120"/>
@endif
