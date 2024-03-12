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
    <div class="relative h-[85vh] bg-center bg-cover"
         style="background-image: url('/images/factory.webp')">
        <div
            class="absolute z-10 flex items-center justify-center inset-0 bg-gradient-to-t from-primary from-0% to-40%  to-transparent ">
            <h1 class="text-white font-semibold text-5xl text-center">
                Get in Touch With <br> Planet Bottling
            </h1>
        </div>
    </div>

    <div class="bg-primary py-24">
        <h1 class="text-white font-semibold text-5xl text-center">
            Join <br> The Team
        </h1>

        <h2 class="text-white text-center mt-3">Open Positions</h2>
        

        <div class="responsive max-w-7xl mx-auto px-4 lg:px-0">
            <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-4">
                    <div class="p-4">
                        <img src="<?php echo e(@App::make('url')->to('/') . '/storage/' . $position->image); ?>"
                             class="w-full aspect-square rounded-full"/>
                        <h1 class="text-white mt-3   text-lg text-center">
                            <?php echo e($position->title); ?>

                        </h1>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="flex items-center justify-center">

            <button class="bg-white text-primary rounded-full px-6 py-3 mx-auto block mt-8">
                Apply Now
            </button>
        </div>
    </div>


    <div class="max-w-7xl mx-auto py-12 px-4 lg:px-0">
        <h1 class="text-primary font-semibold text-5xl text-center ">
            MARKETING
        </h1>

        <p class="text-center text-dark mt-6 mb-12">
            Our marketing team comprises experienced, creative, and career-driven <br> individuals who are dedicated to
            promoting our unique, marketable, and top-quality products through strong, <br> tested, and proven marketing
            strategies.
        </p>

        <img src="/images/marketing.webp" alt="Planet Bottling Marketing" class="w-full">
    </div>

    <div>
        <h1 class="text-primary font-semibold text-5xl text-center ">
            Sales
        </h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center max-w-7xl px-4 lg:px-0 py-6 lg:py-0">
            <img src="/images/bubble-1.webp" alt="Planet Bottling Marketing"
                 class="w-full hidden lg:block">
            <div>
                <p class="font-light">
                    Be leaders of innovation in Nigeria the giant of Africa, as we build and maintain consumer standards
                    for
                    generations of value-driven approach while continuously searching for the best.
                </p>
                <button class="bg-primary text-white px-4 py-2 rounded-full mt-4">Contact Us</button>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/romanfoo/public_html/website_0c6056de/resources/views/get-in-touch.blade.php ENDPATH**/ ?>