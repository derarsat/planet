@if(isset($entry->greyscaleImage))
    <img src="{{@App::make('url')->to('/') . '/storage/' . $entry->grey_scale_image  }}" width="120"/>
@endif
