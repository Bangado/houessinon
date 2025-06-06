<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6 text-white">Tous mes articles</h1>

    <?php if($articles->isEmpty()): ?>
        <div class="text-white">Aucun article trouvé.</div>
    <?php else: ?>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
                    <?php if($article->image): ?>
                        <img src="<?php echo e(asset('storage/' . $article->image)); ?>" alt="<?php echo e($article->title); ?>"
                            class="w-full h-48 object-cover">
                    <?php endif; ?>

                    <div class="p-4 space-y-2">
                        <h2 class="text-xl font-semibold text-gray-800">
                            <?php echo e($article->title); ?>

                        </h2>

                        <p class="text-sm text-gray-500">
                            Publié le <?php echo e($article->created_at->format('d/m/Y à H:i')); ?>

                        </p>

                        <p class="text-gray-700 text-sm line-clamp-3">
                            <?php echo Str::limit(strip_tags($article->content), 150); ?>

                        </p>

                        <div class="flex justify-between items-center mt-3">
                            <a href="<?php echo e(route('articles.show', $article->slug)); ?>"
                                class="text-blue-600 text-sm font-medium hover:underline">
                                Lire l'article →
                            </a>

                            
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('admin.articles.edit', $article->id)); ?>"
                                    class="text-sm text-yellow-600 hover:underline font-medium">
                                    📝 Modifier
                                </a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Pagination Livewire -->
        <div class="mt-8">
            <?php echo e($articles->links()); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/livewire/blog/show-article.blade.php ENDPATH**/ ?>