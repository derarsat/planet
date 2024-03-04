<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
    <script src="./jquery.js"></script>
    <script src="./slick/slick.min.js"></script>
    <style>
        .slick-dots li button:before, .slick-dots li.slick-active button:before {
            color: #fff;
        }
    </style>
    <div class="grid grid-cols-1">
        
        <div class=" text-center flex flex-col justify-center items-center pt-16">
            <h2 class="text-primary font-bold text-4xl lg:text-7xl relative z-10 ">

                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>"
                     class="w-[26rem] z-10 absolute -bottom-40 -left-[18rem] hidden lg:block">

                TAKING BOTTLING <br>TO NEW LEVELS </h2>
            <p class="max mt-12 px-4 mx-auto font-light text-text z-10">
                With the highest ultra modern production capacity, <br> we have set out to meet the growing demand for
                quality <br> and value in the Nigerian market.
            </p>
            <div class="relative">
                <img class="w-full mx-auto mt-24" src="<?php echo e(Vite::asset('resources/images/who-we-are.webp')); ?>"
                     alt="Planet Bottling Hero">

                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>"
                     class="w-44 absolute top-80 left-12 hidden lg:block">
            </div>
        </div>
        
        <div class="from-primary to-white bg-gradient-to-b py-12 lg:py-24  ">

            <div class="container  text-white text-center relative">
                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>"
                     class="w-[26rem] z-10 absolute right-0 -top-[20rem] hidden lg:block">
                <h2 class=" font-bold text-4xl lg:text-7xl relative z-10 ">
                    CRAFTING <br>PERFECTION </h2>
                <p class="text-white uppercase font-medium mb-6 text-xl">
                    Our Mission
                </p>
                <p class="text-dark my-6 px-4 mx-auto font-light  z-10 relative">
                    <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>"
                         class="w-64 z-10 absolute left-0 -top-32 hidden lg:block">
                    To produce affordable quality beverages and provide excellence to Nigerians <br> while actively
                    ensuring
                    consumers remember us by our value, <br> the unique taste and design of our products.
                </p>


                <img src="<?php echo e(Vite::asset('resources/images/machine-2.webp')); ?>" alt="Planet Bottling Machines"
                     class="mt-12 max-w-full w-[64rem] mx-auto">
            </div>
        </div>
        
        <div class="text-primary container flex-col flex items-center justify-center gap-12 text-center">
            <h2 class=" font-bold text-4xl lg:text-7xl relative z-10 ">
                ENVISIONING <br> BRILLIANCE

                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>"
                     class="w-64 z-10 absolute -right-64 top-0 hidden lg:block">
            </h2>
            <p class=" uppercase font-medium mb-6 text-xl">
                Our Vision
            </p>
            <div class="w-full relative pb-12">
                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>"
                     class="w-96 absolute left-0 -top-64 hidden lg:block">
                <p class="font-light text-dark w-full flex justify-end">
                    Be leaders of innovation in Nigeria the giant of africa, <br>
                    as we build and maintain consumer standards for <br>
                    generations of value-driving approach while <br>
                    continuously searching for the best.
                </p>
            </div>
        </div>
        <div class="bg-dark py-12 lg:py-24 mb-12">
            <div class="mb-12 max-w-7xl mx-auto px-4 lg:px-0">
                <h1 class="text-white font-semibold text-5xl text-center">Integrity <br>in Action</h1>
                <h2 class="text-white text-center mt-4 mb-12">OUR VALUES</h2>

                <div class="responsive max-w-7xl mx-auto px-4 lg:px-0">
                    <?php $__currentLoopData = $integrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $integrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-4">
                            <div class="p-4">
                                <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $integrate->image); ?>"
                                     class="w-full aspect-square rounded-full"/>
                                <h1 class="text-white mt-3   text-lg text-center">
                                    <?php echo e($integrate->title); ?>

                                </h1>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>


        </div>
        
        <?php if (isset($component)) { $__componentOriginal494ea3db45321890e3d0ded22a532811b318bca8 = $component; } ?>
<?php $component = App\View\Components\Brands::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('brands'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Brands::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal494ea3db45321890e3d0ded22a532811b318bca8)): ?>
<?php $component = $__componentOriginal494ea3db45321890e3d0ded22a532811b318bca8; ?>
<?php unset($__componentOriginal494ea3db45321890e3d0ded22a532811b318bca8); ?>
<?php endif; ?>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/who-we-are.blade.php ENDPATH**/ ?>