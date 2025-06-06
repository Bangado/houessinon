<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
<script src="https://cdn.tiny.cloud/1/<?php echo e(env('TINY_KEY')); ?>/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


<style>
    body {
        background-image: url('https://i.postimg.cc/3x2tL445/Whats-App-Image-2025-06-06-at-18-27-40.jpg');
        /* Wax pattern stylisé */
        background-repeat: repeat;
        background-size: cover;
        background-attachment: fixed;
        color: #222;
    }
</style>


<!---- ajouter le fichier css/syle.css --->
<?php echo \Livewire\Livewire::styles(); ?>


<body class="min-h-screen flex flex-col">

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="font-bold text-3xl"><span class="text-orange-500">Dumas</span> Houessinon</a>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/#about"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 
                            md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 
                            dark:hover:text-white md:dark:hover:bg-transparent">Qui
                            suis-je ?</a>
                    </li>
                    <li>
                        <a href="/#services"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 
                            md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 
                            dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="books"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Mes
                            livres</a>
                    </li>
                    <li>
                        <a href="/#contact"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                    </li>

                    <li>
                        <a href="<?php echo e(route('media.gallery')); ?>"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Galerie</a>
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a href="<?php echo e(route('add-blog')); ?>"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ajouter
                                un article</a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('media.upload')); ?>"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ajouter
                                Medias</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>





    <?php echo e($slot); ?>

    <footer class="mt-auto text-center py-6 font-bold text-gray-500 bg-orange-50 text-black">
        © <?php echo e(date('Y')); ?> <span class="text-orange-500">Dumas</span> Houessinon – Tous droits réservés.
    </footer>



    <?php echo \Livewire\Livewire::scripts(); ?>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/kueldrwgikubo5osmzxosl5stwnbs5nlw45bn7i9yb183u3j/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>


</body>

</html>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/layouts/base.blade.php ENDPATH**/ ?>