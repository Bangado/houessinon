<?php $__env->startSection('name', 'CONNEXION'); ?>
<form wire:submit.prevent="login" class="cover w-full pt-6">
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="my-1 bg-red-50 p-2 rounded text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="my-1 bg-red-50 p-2 rounded text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email address <span class="text-red-500">*</span>
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" wire:model="email" type="email" />
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password <span class="text-red-500">*</span>
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" wire:model="password" type="password" />
    </div>


    <div class="flex items-center justify-between mt-8 w-full">
        <button type="submit" class="w-full focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Se Connecter</button>
    </div>
</form>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/livewire/auth/login.blade.php ENDPATH**/ ?>