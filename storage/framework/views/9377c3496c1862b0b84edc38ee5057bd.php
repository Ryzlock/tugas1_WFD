

<?php $__env->startSection('content'); ?>
    <div class="flex flex-col items-center mt-10">
        <div class="font-bold text-5xl mb-5">
            Login
        </div>
        <form id="loginForm">
            <div>
                <label class="block text-white font-medium mb-1" for="email">Email</label>
                <input class="rounded border border-white" type="email" name="email" required placeholder="example@domain.com">
            </div>
            <div>
                <label class="block text-white font-medium mb-1" for="password">Password</label>
                <input class="rounded border border-white" type="password" name="password" required placeholder="***********">
            </div>
            <button class="w-full font-medium bg-blue-800 rounded px-5 py-2" type="submit">Login</button>
            <p class="text-sm font-light">
                Don’t have an account yet? <a href="<?php echo e(route('register')); ?>" class="text-medium underline">Sign-up</a>
            </p>
        </form>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Feature is not implemented");
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\T1_C14230268\resources\views/login.blade.php ENDPATH**/ ?>