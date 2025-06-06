<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="base-url" content="<?php echo e(url('/')); ?>"/>
    <link rel="icon" type="image/png" href="https://i.postimg.cc/VNTfK4L1/Logo-TIC.png" />
    <!-- Tailwind UI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>


    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="antialiased font-sans bg-gray-200">

    <?php echo e($slot); ?>


    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.2.0/dist/livewire-sortable.js"></script>

</body>
</html>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/components/layouts/base-auth.blade.php ENDPATH**/ ?>