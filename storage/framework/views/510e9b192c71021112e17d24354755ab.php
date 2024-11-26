<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
        <style>
            .overlay::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный цвет */
            }

            .skew-div {
                transform: skewX(-20deg);
                transition: transform 0.5s ease-in-out;
            }

            .skew-div:hover text {

            }
            .skew-div:hover {
                transform: skewX(-20deg) scale(1.2);
                background: rgba(0,0,0,1);
            }
        </style>
     <?php $__env->endSlot(); ?>
    <div class="py-6 content">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 -mt-20">
            <div class="max-w-md col-span-1">
                <img src="<?php echo e(asset('images/books.png')); ?>" alt="img"/>
            </div>
            <div class="text-xl text-pretty text-gray-500 text-center flex items-center">
                <div>
                    Ласкаво просимо до нашого онлайн-магазину Animanga!
                    Кожна покупка в нас – це крок у дивовижний світ японських коміксів,
                    сповнений захоплюючих сюжетів та унікальних персонажів.<br><br>
                    <a class="font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer" href="<?php echo e(route('product.manga')); ?>">
                        Перейти до перегляду манги ➜
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 ">
            <div class="text-gray-500 text-pretty text-xl text-center flex items-center">
                <div>
                    Також у нашому магазині ви знайдете широкий асортимент мерчу,
                    який потішить кожного фаната. Ми пропонуємо стильні футболки, аксесуари,
                    колекційні фігурки, постери та багато іншого.
                    Всі наші товари – це офіційний мерч, що відрізняється високою якістю та оригінальним дизайном.<br><br>
                    <a class="font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer" href="<?php echo e(route('product.merch')); ?>">
                        Перейти до перегляду мерчу ➜
                    </a>
                </div>
            </div>
            <div class="max-w-md -mt-0.5 ml-16">
                <img src="<?php echo e(asset('images/merch.png')); ?>" alt="img"/>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.popular-products','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('popular-products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            Популярні зараз товари:
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced)): ?>
<?php $attributes = $__attributesOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced; ?>
<?php unset($__attributesOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced)): ?>
<?php $component = $__componentOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced; ?>
<?php unset($__componentOriginal0e4bb10e0ea1ce5e3f35380ef00d9ced); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\Studies\Vlada\proj_d2\resources\views/dashboard.blade.php ENDPATH**/ ?>