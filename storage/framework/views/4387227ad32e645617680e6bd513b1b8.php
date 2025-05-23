<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Metal Cubes Coolest</title>
    <style>
        .lava-flow {
            background: linear-gradient(
                45deg,
                #7f1d1d,
                #b91c1c,
                #f97316,
                #dc2626
            );
            background-size: 200% 200%;
            animation: lavaAnimation 15s ease infinite;
        }

        @keyframes lavaAnimation {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }
    </style>
</head>
<body class="min-h-screen w-full">
    <!-- Lava Background -->
    <div class="fixed inset-0 lava-flow z-0"></div>
    <!-- Main Content -->
    <div class="relative z-10 container mx-auto flex flex-col min-h-screen">
        <!-- Top Navigation -->
        <div class="border-b border-black">
            <?php echo $__env->make('includes.topnav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <!-- Content Area -->
        <div class="pt-16 flex-1">
            <div class="p-4">
                <div class="text-3xl text-white bg-gray-800/75 rounded-lg px-4 py-3 mt-3">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\T1_C14230268\resources\views/base/base.blade.php ENDPATH**/ ?>