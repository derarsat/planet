<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-1 gap-12 lg:gap-24">
        
        <div class="relative">
            <div
                class="absolute inset-0 flex items-center justify-center flex-col gap-8 bg-gradient-to-t from-white via-transparent to-transparent">
                <h1 class="text-white font-bold text-4xl lg:text-7xl text-center">
                    MASTERING BOTTLING <br> FOR GLOBAL DISTRIBUTION
                </h1>
                <button class="bg-white text-primary px-6 py-2 rounded-full">Learn More</button>

            </div>
            <img src="<?php echo e(Vite::asset('resources/images/hero.webp')); ?>" alt="Planet Bottling Hero">
        </div>
        
        <div class="text-center grid grid-cols-1 gap-12">
            <h2 class="text-primary font-bold text-4xl lg:text-7xl">BEHIND <br> THE BOTTLES</h2>
            <p class="max-w-3xl px-4 mx-auto font-light text-text">
                With the highest ultra modern production capacity, we have set out to meet the growing demand for
                quality
                and value in the Nigerian market.
                The project started in 2015 when ABN and Monarch decided to
                replicate the success story in the Nigerian market by investing in the state-of-the-art factory along
                Lagos
                Ibadan expressway with over 100,000 sqm which is currently Planet Bottling Company's factory.
            </p>
            <div class="flex justify-center">
                <button class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</button>

            </div>
        </div>
        
        <div class="container relative">
            <img src="<?php echo e(Vite::asset('resources/images/machine.webp')); ?>" alt="Planet Bottling Machines">
            <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>" alt="Planet Bottling Locations"
                 class="w-96 absolute -top-[12rem] -left-[12rem] hidden lg:block">
        </div>

        
        <div class="bg-dark container grid grid-cols-1 lg:grid-cols-2 gap-24 py-6 lg:py-0 ">
            <img src="<?php echo e(Vite::asset('resources/images/man.webp')); ?>" alt="Planet Bottling Factory">
            <div
                class="text-center lg:text-right text-white flex flex-col items-center lg:items-end justify-center gap-12 ">
                <h2 class="font-bold text-4xl lg:text-7xl">OUR <br class="hidden lg:block"> VALUES</h2>
                <p class="font-light">
                    Our values at Planet Bottling Company encompass a steadfast commitment to innovation, integrity,
                    diversity and inclusion, quality, open communication, fostering career growth, a relentless passion
                    for excellence, and an unwavering focus on customer centrality and value centrality in all that we
                    do.
                </p>
                <button class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</button>
            </div>
        </div>
        
        <div class="text-center grid grid-cols-1 gap-12">
            <h2 class="text-primary font-bold text-4xl lg:text-7xl">PROUDLY MADE <br> IN NIGERIA</h2>
            <p class="max-w-3xl px-4 mx-auto font-light text-text relative">
                Planet bottling manufactures and markets a range of beverages made entirely in Nigeria under the license
                from ‘the Monarch Beverages company, Atlanta, GA, USA’. Our brands are already present in over 60
                countries globally and 40 African countries.
                <img src="<?php echo e(Vite::asset('resources/images/bubble-1.webp')); ?>" alt="Planet Bottling Locations"
                     class="w-64 absolute -top-[8rem] -right-[8rem] hidden lg:block">
            </p>
            <div class="flex justify-center">
                <button class="bg-primary text-white font-light px-6 py-2 rounded-full">Learn More</button>

            </div>
            <img src="<?php echo e(Vite::asset('resources/images/map.webp')); ?>" alt="Planet Bottling Locations"
                 class="w-[32rem] max-w-full mx-auto">
        </div>
        
        
        <div class="bg-dark relative">
            <div class="container py-24 items-center relative ">
                <div class="text-white grid grid-cols-1 gap-12 w-full lg:w-7/12">
                    <h2 class="font-bold text-4xl lg:text-7xl">GET IN TOUCH</h2>
                    <p class="font-light">
                        Whether you have a question or feedback about our wide range of high-quality products or need
                        assistance with sales or marketing related inquiries, our friendly and knowledgeable customer
                        support team is here to help. <br> Feel free to reach out to us through our convenient contact
                        form, and
                        we’ll get back to you promptly.
                    </p>
                    <div>
                        <button class="bg-primary text-white font-light px-6 py-2 rounded-full">Contact Us</button>

                    </div>
                </div>
                <img class="absolute -top-1/3 right-0 w-[32rem] hidden lg:block"
                     src="<?php echo e(Vite::asset('resources/images/chat-bubbles.webp')); ?>"
                     alt="Planet Bottling Factory">

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/derarsattouf/Documents/code/personal/planet/resources/views/index.blade.php ENDPATH**/ ?>