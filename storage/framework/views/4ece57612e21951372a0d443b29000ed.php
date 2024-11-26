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
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            Кошик
        </h2>
     <?php $__env->endSlot(); ?>

        <div class="mx-auto max-w-2xl px-4 py-8 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-3 gap-x-6 gap-y-8 xl:gap-x-8">
                <div class="col-span-2">
                    <input type="hidden" value="<?php echo e($total = 0); ?>">
                    <input type="hidden" value="<?php echo e($count = 0); ?>">
                    <?php $__currentLoopData = $user_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" value="<?php echo e($product = \App\Models\Product::find($cart_link->product_id)); ?>"/>
                        <input type="hidden" value="<?php echo e($total+=$product->price*$cart_link->quantity); ?>">
                        <input type="hidden" value="<?php echo e($count+=$cart_link->quantity); ?>">
                        <a href="<?php echo e(route('product.show', $product)); ?>" class="group mr-2 p-3 flex border-t-2 border-gray-600">
                            <div class="aspect-h-1 w-1/5 rounded-lg xl:aspect-h-8 xl:aspect-w-7">
                                <img src="<?php echo e($product->img); ?>" alt="image" class="h-full w-full object-cover object-center group-hover:opacity-75" style="max-height: 300px">
                            </div>
                            <div class="pl-5">
                                <div>
                                    <h3 class="inline-block align-middle text-2xl text-gray-200"><?php echo e($product->title); ?></h3>
                                </div>
                                <div>
                                    <p class="inline-block align-middle text-lg font-medium text-gray-200"><?php echo e($product->price); ?> грн. | Кількість: <?php echo e($cart_link->quantity); ?></p>
                                </div>
                                <form action="<?php echo e(route('cart.delete', $cart_link->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <?php if (isset($component)) { $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2']); ?>
                                        Видалити з кошика
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11)): ?>
<?php $attributes = $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11; ?>
<?php unset($__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11)): ?>
<?php $component = $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11; ?>
<?php unset($__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11); ?>
<?php endif; ?>
                                </form>
                            </div>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="p-5 bg-gray-600 rounded-xl max-h-80 font-bold text-gray-100">
                    <div class="flex justify-between">
                        <div class="m-3">
                            Загальна кількість речей:
                        </div>
                        <div class="m-3">
                            <?php echo e($count); ?>

                        </div>
                    </div>
                    <hr color="white" width="90%" class="mx-auto">
                    <div class="flex justify-between">
                        <div class="m-3">
                            Доставка:
                        </div>
                        <div class="m-3">
                            за рахунок магазину
                        </div>
                    </div>
                    <hr color="white" width="90%" class="mx-auto">
                    <div class="flex justify-between mt-3">
                        <div class="m-3">
                            Загалом:
                        </div>
                        <div class="m-3">
                            <?php echo e($total); ?>

                        </div>
                    </div>
                    <div class="flex mt-3 justify-center">
                        <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            Перейти до оплати
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
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
<?php /**PATH D:\Studies\Vlada\proj_d2\resources\views/product/cart.blade.php ENDPATH**/ ?>