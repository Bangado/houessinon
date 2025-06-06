<?php if (isset($component)) { $__componentOriginald8bdefe537b868c30952851c478827a760077823 = $component; } ?>
<?php $component = App\View\Components\Layouts\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layouts\Base::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($slot); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8bdefe537b868c30952851c478827a760077823)): ?>
<?php $component = $__componentOriginald8bdefe537b868c30952851c478827a760077823; ?>
<?php unset($__componentOriginald8bdefe537b868c30952851c478827a760077823); ?>
<?php endif; ?><?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/layouts/app.blade.php ENDPATH**/ ?>