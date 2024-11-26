<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <?php
        $bgs = array('https://gifdb.com/images/high/pixel-art-starry-night-background-tdtkgqs3ds5vmtrm.gif',
                    'https://i.pinimg.com/originals/f1/63/11/f16311fd0c32786525f471c685bc516e.gif',
                    'https://i.redd.it/uxifx7eyaenb1.gif',
                    'https://steamuserimages-a.akamaihd.net/ugc/920296549068062586/92595CBF81FBCDFDC0FD667DFC400E41F6956F44/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false');
        $background = $bgs[rand(0,3)];
    ?>
    <body class="font-sans antialiased bg-cover" background="<?php echo e($background); ?>">
        <div class="min-h-screen">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main class="bg-black bg-opacity-80">
                <?php echo e($slot); ?>

            </main>
        </div>
    </body>
</html>
<?php /**PATH D:\Studies\Vlada\proj_d2\resources\views/layouts/app.blade.php ENDPATH**/ ?>