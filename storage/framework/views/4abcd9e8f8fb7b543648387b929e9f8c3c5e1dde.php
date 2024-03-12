<?php if(isset($entry->greyscaleImage)): ?>
    <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $entry->greyscaleImage); ?>" width="120"/>
<?php endif; ?>
<?php /**PATH /home4/romanfoo/public_html/website_0c6056de/resources/views/partials/greyscale-image.blade.php ENDPATH**/ ?>