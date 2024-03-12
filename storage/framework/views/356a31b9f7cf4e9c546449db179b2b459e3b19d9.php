
<?php
  $column['value'] = $column['value'] ?? data_get($entry, $column['name']);

  if($column['value']) {
    $column['height'] = $column['height'] ?? "25px";
    $column['width'] = $column['width'] ?? "auto";
    $column['radius'] = $column['radius'] ?? "3px";
    $column['prefix'] = $column['prefix'] ?? '';
    $column['temporary'] = $column['temporary'] ?? false;
    $column['expiration'] = $column['expiration'] ?? 1;

    if($column['value'] instanceof \Closure) {
      $column['value'] = $column['value']($entry);
    }

    if (is_array($column['value'])) {
      $column['value'] = json_encode($column['value']);
    }

    if (preg_match('/^data\:image\//', $column['value'])) { // base64_image
      $href = $src = $column['value'];
    } elseif (isset($column['disk'])) { // image from a different disk (like s3 bucket)

      if (!empty($column['temporary'])) {
          $href = $src = Storage::disk($column['disk'])->temporaryUrl($column['prefix'].$column['value'], now()->addMinutes((int) $column['expiration']));
      } else {
          $href = $src = Storage::disk($column['disk'])->url($column['prefix'].$column['value']);
      }

    } else { // plain-old image, from a local disk
      $href = $src = asset($column['prefix'] . $column['value']);
    }

    $column['wrapper']['element'] = $column['wrapper']['element'] ?? 'a';
    $column['wrapper']['href'] = $column['wrapper']['href'] ?? $href;
    $column['wrapper']['target'] = $column['wrapper']['target'] ?? '_blank';
  }
?>

<span>
  <?php if(empty($column['value'])): ?>
    <?php echo e($column['default'] ?? '-'); ?>

  <?php else: ?>
    <?php echo $__env->renderWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <img src="<?php echo e($src); ?>" style="
        max-height: <?php echo e($column['height']); ?>;
        width: <?php echo e($column['width']); ?>;
        border-radius: <?php echo e($column['radius']); ?>;"
        />
    <?php echo $__env->renderWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
  <?php endif; ?>
</span>
<?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/vendor/backpack/crud/columns/image.blade.php ENDPATH**/ ?>