<div class="max-w-4xl mx-auto py-10 px-4">
    <article class="bg-white p-6 rounded-lg shadow space-y-6">

        <!-- Image -->
        <?php if($article->image): ?>
            <img src="<?php echo e(asset('storage/' . $article->image)); ?>"
                 alt="<?php echo e($article->title); ?>"
                 class="w-full h-auto rounded-lg object-cover mb-4">
        <?php endif; ?>

        <!-- Titre -->
        <h1 class="text-3xl font-bold text-gray-900"><?php echo e($article->title); ?></h1>

        <!-- Date -->
        <p class="text-sm text-gray-500">
            Publié le <?php echo e($article->created_at->translatedFormat('d F Y à H:i')); ?>

        </p>

        <!-- Contenu -->
        <div class="prose max-w-none">
            <?php echo $article->content; ?>

        </div>

        <!-- Retour -->
        <a href="<?php echo e(route('blog')); ?>"
           class="mt-6 inline-block text-blue-600 hover:underline text-sm">
           ← Retour à la liste des articles
        </a>
    </article>
</div>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/livewire/article-detail.blade.php ENDPATH**/ ?>