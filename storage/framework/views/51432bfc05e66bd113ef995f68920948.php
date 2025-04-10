

<?php $__env->startSection('content'); ?>
<div class="pt-7">
    <div class="flex flex-col items-center">
        <div class="flex justify-around w-full">
            <div>
                <?php if($prevId): ?>
                    <a class="px-4 py-2 bg-gray-600 text-white rounded" href="<?php echo e(route('catalogue.show', ['id' => $prevId])); ?>">Previous</a> 
                <?php endif; ?>
            </div>
            <div>
                
            </div>
            <div>
                <?php if($nextId): ?>
                    <a class="px-4 py-2 bg-gray-600 text-white rounded" href="<?php echo e(route('catalogue.show', ['id' => $nextId])); ?>">Next</a>
                <?php endif; ?>
            </div>
        </div>
        <div><p class="mt-5 font-bold text-5xl mb-5"><?php echo e($item['name']); ?></p></div>
        <img src="<?php echo e(asset($item['image'])); ?>" alt="">
        <div><p class="text-center text-xl md:text-lg sm:text-base"><?php echo e($item['description']); ?></p></div>
        <button id="order" type="button" class="font-medium bg-blue-800 rounded px-5 py-2 cursor-pointer">Order</button>
    </div>
</div>

<script>
    document.getElementById("order").addEventListener("click", function(event) {
        event.preventDefault();
        alert("Feature is not implemented");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\T1_C14230268\resources\views/cube.blade.php ENDPATH**/ ?>