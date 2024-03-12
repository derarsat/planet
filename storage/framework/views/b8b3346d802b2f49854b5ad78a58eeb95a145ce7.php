<?php if(isset($entry->greyscaleImage)): ?>
    <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $entry->greyscaleImage); ?>" width="120"/>
<?php endif; ?>
<?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/partials/greyscale-image.blade.php ENDPATH**/ ?>