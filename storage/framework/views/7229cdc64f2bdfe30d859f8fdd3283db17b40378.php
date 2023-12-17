<?php if(isset($entry->image)): ?>
    <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $entry->historyImage); ?>" width="120"/>
<?php endif; ?>
<?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/partials/historyImage.blade.php ENDPATH**/ ?>