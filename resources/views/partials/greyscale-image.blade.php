@if(isset($entry->greyscaleImage))
    <img src="{{@App::make('url')->to('/') . '/storage/' . $entry->greyscaleImage  }}" width="120"/>
@endif
