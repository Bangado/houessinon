<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6 text-white">Galerie d’images</h1>

    <?php if($images->isEmpty()): ?>
        <p class="text-white">Aucune image ajoutée.</p>
    <?php else: ?>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded shadow p-2 cursor-pointer hover:scale-105 transition"
                    wire:click="$set('currentIndex', <?php echo e($index); ?>)">
                    <?php if(env('APP_ENV') == 'local'): ?>
                        <img src="<?php echo e(asset('storage/' . $image->filename)); ?>" class="rounded w-full h-128 object-cover" />
                    <?php else: ?>
                        <img src="<?php echo e(asset('public/storage/' . $image->filename)); ?>"
                            class="rounded w-full h-128 object-cover" />
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-80 items-center justify-center p-4">
        <div class="relative w-full max-w-4xl mx-auto">
            <!-- Close button -->
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>

            <!-- Image display -->
            <img id="modalImage" src=""
                class="rounded-lg w-full max-h-[80vh] object-contain transition duration-300" />

            <!-- Navigation arrows -->
            <button onclick="prevImage()"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white text-4xl px-3">
                ‹
            </button>
            <button onclick="nextImage()"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white text-4xl px-3">
                ›
            </button>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('livewire:load', function() {
            const images = <?php echo json_encode($images->pluck('filename'), 15, 512) ?>;
            let currentIndex = 0;

            window.openModal = function(index) {
                currentIndex = index;
                updateModalImage();
                document.getElementById('imageModal').classList.remove('hidden');
            };

            window.closeModal = function() {
                document.getElementById('imageModal').classList.add('hidden');
            };

            window.updateModalImage = function() {
                const modalImg = document.getElementById('modalImage');
                modalImg.src = env('APP_ENV') == 'local' ? '/storage/' + images[currentIndex] : '/public/storage/' + images[currentIndex];
            };

            window.nextImage = function() {
                currentIndex = (currentIndex + 1) % images.length;
                updateModalImage();
            };

            window.prevImage = function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateModalImage();
            };

            // ✅ Capture de l’événement Livewire
            Livewire.on('openImageModal', function(index) {
                openModal(index);
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/tic/Bureau/perso/dumas-houssinon/resources/views/livewire/media-gallery.blade.php ENDPATH**/ ?>