

<?php $__env->startSection('content'); ?>
<div class="pt-7">
    <div class="grid grid-cols-1 gap-0 justify-items-center text-center">
        <div class="">
            Our website specializes in selling high-quality metal cubes, perfect for collectors, science enthusiasts, and industrial applications. We offer a variety of pure metal cubes, including aluminum, copper, titanium, and tungsten, each precisely machined for accuracy and durability. Explore our collection and find the perfect metal cube for your needs!
        </div >
        <div class="">
            <img src="<?php echo e(asset('images/mainPageImage_bg.png')); ?>" alt="">
        </div>
        <div class="">
            Don't just stay here go buy a piece of pure, precision-crafted metal today! Our high-quality cubes are perfect for collectors, science lovers, and professionals. Click the browser button to begin browsing!
        </div>
        <br>
        <div class="">
            <a class="rounded-full px-2 py-1 bg-blue-800" href="<?php echo e(route('catalogue.index')); ?>">Browse Catalogue</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\T1_C14230268\resources\views/mainWeb.blade.php ENDPATH**/ ?>