<div class="max-w-xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter une image</h1>

    <?php if(session()->has('success')): ?>
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <input type="file" wire:model="image" accept="image/*" class="block w-full" />
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <?php if($image): ?>
            <div class="mt-4">
                <img src="<?php echo e($image->temporaryUrl()); ?>" class="rounded max-h-64 w-auto" />
            </div>
        <?php endif; ?>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Enregistrer
        </button>
    </form>
</div>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/livewire/media-upload.blade.php ENDPATH**/ ?>