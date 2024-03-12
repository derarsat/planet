<?php $__env->startSection('content'); ?>
    <script src="./jquery.js"></script>
    <script src="./slick/slick.min.js"></script>
    <link rel="stylesheet" href="./slick/slick.css">
    <link rel="stylesheet" href="./slick/slick-theme.css">
    <div class="relative h-[85vh] bg-center bg-cover"
         style="background-image: url('images/machine-global.webp')">
        <div class="absolute z-10 flex items-center justify-center inset-0 bg-black bg-opacity-30">
            <h1 class="text-white font-semibold text-5xl text-center ">
                Unmatched Expertise <br>Get in touch
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="slider">
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1><?php echo e($event->title); ?></h1>
                <img src="<?php echo e(@App::make('url')->to('/') . '/' . $event->image); ?>" alt="">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>



    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: true,
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/media.blade.php ENDPATH**/ ?>