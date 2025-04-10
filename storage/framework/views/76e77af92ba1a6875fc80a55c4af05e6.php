

<?php $__env->startSection('content'); ?>
<div class="pt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 items-center justify-items-center text-center">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="text-white">
            <div>
                <img src="<?php echo e(asset($item['image'])); ?>" alt="">
                <h1 class=""><?php echo e($item['name']); ?></h1>
                <a class="rounded-full bg-blue-700" href="<?php echo e(route('catalogue.show', ['id' => $id])); ?>">Click For Info</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\T1_C14230268\resources\views/catalogue.blade.php ENDPATH**/ ?>