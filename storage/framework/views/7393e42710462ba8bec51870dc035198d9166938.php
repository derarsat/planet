<?php if($crud->hasAccess('create')): ?>
	<a href="<?php echo e(url($crud->route.'/create')); ?>" class="btn btn-primary" data-style="zoom-in"><span class="ladda-label"><i class="la la-plus"></i> <?php echo e(trans('backpack::crud.add')); ?> <?php echo e($crud->entity_name); ?></span></a>
<?php endif; ?><?php /**PATH /home4/romanfoo/public_html/website_0c6056de/resources/views/vendor/backpack/crud/buttons/create.blade.php ENDPATH**/ ?>