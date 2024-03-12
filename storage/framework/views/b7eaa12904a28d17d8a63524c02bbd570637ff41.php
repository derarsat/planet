<?php
    // this is made available by columns like select and select_multiple
    $related_key = $related_key ?? null;

    // define the wrapper element
    $wrapperElement = $column['wrapper']['element'] ?? 'a';
    if(!is_string($wrapperElement) && $wrapperElement instanceof \Closure) {
        $wrapperElement = $wrapperElement($crud, $column, $entry, $related_key);
    }
?>

</<?php echo e($wrapperElement); ?>>
<?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/vendor/backpack/crud/columns/inc/wrapper_end.blade.php ENDPATH**/ ?>