<?php $__env->startSection('content'); ?>
    <img src="/images/brands-banner.webp" alt="Planet Bottling Brands"/>

    <div class="container py-12 grid grid-cols-1 gap-12 text-dark">
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-grey rounded-2xl p-6 lg:p-12 grid grid-cols-3 gap-12 lg:gap-24">
                <div class="order-2 lg:order-1 flex col-span-3 lg:col-span-2 flex-col items-start justify-between">
                    <div class="flex flex-col gap-4">
                        <h1 class="text-3xl font-semibold">
                            <?php echo e($brand->title); ?>

                        </h1>
                        <p class="font-light">
                            <?php echo e($brand->description); ?>

                        </p>
                    </div>
                    <a href="/product/<?php echo e(isset($brand->products) ?? $brand->products[0]->id); ?>"
                       class="bg-primary text-white px-4 py-2 rounded-full mt-6 lg:mt-0">Learn More</a>
                </div>
                <img class="order-1 lg:order-2 w-full col-span-3 lg:col-span-1"
                     src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $brand->image); ?>" alt="<?php echo e($brand->title); ?>">
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/romanfoo/public_html/website_0c6056de/resources/views/brands.blade.php ENDPATH**/ ?>