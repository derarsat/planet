<?php if(isset($entry->image)): ?>
    <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $entry->image); ?>" width="120"/>
<?php endif; ?>
<?php /**PATH /home4/romanfoo/public_html/website_0c6056de/resources/views/partials/image.blade.php ENDPATH**/ ?>