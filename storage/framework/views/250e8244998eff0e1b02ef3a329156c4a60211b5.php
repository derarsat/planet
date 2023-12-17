<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <script src="/jquery.js"></script>
    <script src="/slick/slick.min.js"></script>
    <style>
        .slick-prev:before, .slick-next:before {
            color: #008BC9;
        }
    </style>
    <div class="relative">
        <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $product->heroImage); ?>" alt="<?php echo e($product->title); ?>"> />
        <div
            class="absolute z-10 flex items-center justify-center inset-0 bg-gradient-to-t from-primary to-transparent ">
        </div>
    </div>
    <div class="relative bg-primary py-12 lg:py-24">
        <div class="max-w-4xl px-4 mx-auto">
            <h1 class="text-white font-semibold text-5xl text-center">
                THE STORY
            </h1>

            <p class="text-white  lg:px-0 mx-auto text-center mt-8 mb-24 font-light">
                <?php echo e($product->story); ?>

            </p>
            
            <img src="<?php echo e(Vite::asset('resources/images/machine.webp')); ?>" class="w-full" alt="Planet Bottling Marketing"
            >
        </div>


        
        <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>" alt="Planet Bottling Marketing"
             class="w-96 hidden lg:block absolute top-0 right-0">
    </div>
    <div class="py-12 lg:py-24">
        <h1 class="text-primary font-semibold text-5xl text-center mb-12">
            PRODUCT <br> HISTORY
        </h1>

        <div class="max-w-4xl px-4 mx-auto grid grid-cols-2 gap-12 items-center">
            <div class="relative">
                
                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>" alt="Planet Bottling Marketing"
                     class="w-44 absolute -top-20 -left-20">
                <img class="w-full " src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $product->historyImage); ?>"
                     alt="<?php echo e($product->title); ?>"> />
            </div>
            <p>
                <?php echo e($product->history); ?>

            </p>
        </div>
        <div class="max-w-7xl px-4 lg:px-0 mx-auto relative">
            <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>" alt="Planet Bottling Marketing"
                 class="w-96 absolute -top-20 -right-20">
            <h1 class="text-primary font-semibold text-5xl text-center my-12 ">
                THE FLAVORS
            </h1>
            <p class="text-center">
                <?php echo e($product->title); ?> celebrates diversity through a world of tastes while bringing Nigerians closer
                together.
            </p>


            <div class="responsive max-w-7xl mx-auto px-4 lg:px-0 mt-12">
                <?php $__currentLoopData = $product->productFlavors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flavor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-4">
                        <img alt="<?php echo e($flavor->title); ?>"
                             src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $flavor->image); ?>"
                             class="w-full aspect-square rounded-full"/>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <script>
        $('.responsive').slick({
            dots: true,
            // centerMode: true,
            arrows: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/product.blade.php ENDPATH**/ ?>