    <section id="books" class="py-20 px-4 md:px-8 lg:px-20">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-10 text-white">📖 Mes ouvrages pour t'inspirer</h2>

            <!-- Présentation du livre -->
            <div class="bg-white p-8 rounded-xl shadow-md text-left">
                <h3 class="text-2xl font-semibold text-orange-600 mb-4">De l’autopromotion à l’emploi: les chroniques
                    d’un débrouillard</h3>
                <p class="mb-2">➡️ Un guide réaliste, stimulant et outillé pour apprendre à se vendre intelligemment
                    dans un monde saturé d’informations.</p>
                <p class="mb-2">💡 Idéal pour étudiants, jeunes pros, entrepreneurs, communicants.</p>
                <p class="mb-2">✅ Format : <strong>physique</strong> | 💰 <strong>Prix : 10 000 FCFA</strong></p>
                <p class="mb-4">💳 Paiement via <span class="font-semibold">Fedapay</span> ou <span
                        class="font-semibold">Kikapay</span></p>
                <a href="#order-form"
                    class="inline-block mt-2 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">👉
                    Acheter maintenant</a>
                <p class="mt-4 text-sm text-gray-500">📦 Livraison après achat (laisse ton numéro !)</p>
            </div>

            <!-- Cartes photos du livre -->
            <div class="grid md:grid-cols-2 gap-6 mt-12">
                <div class="group bg-gray-100 overflow-hidden">
                    @if (env('APP_ENV') == 'local')
                        <img src="{{ asset('assets/images/livre-2.jpg') }}" alt=""
                            class="group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    @else
                        <img src="{{ asset('public/assets/images/livre-2.jpg') }}" alt=""
                            class="group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    @endif
                </div>

                <div class="group bg-gray-100 overflow-hidden">

                    <div class="flex justify-end items-end -ml-2 overflow-hidden">

                        @if (env('APP_ENV') == 'local')
                            <img src="{{ asset('assets/images/livre-3.jpg') }}" alt=""
                                class="group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        @else
                            <img src="{{ asset('public/assets/images/livre-3.jpg') }}" alt=""
                                class="group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        @endif
                    </div>
                </div>
            </div>




            <!-- Contacts par pays -->

            <!-- Formulaire de commande -->
            <div id="order-form" class="mt-16 text-left">
                <h3 class="text-2xl font-bold mb-4 text-white">Faire une demande d’achat</h3>
                @if (session('books'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 transition-opacity duration-1000"
                        role="alert">
                        <strong class="font-bold">Succès !</strong>
                        <span class="block sm:inline">{{ session('books') }}</span>
                    </div>
                @endif

                <form wire:submit.prevent="contact" class="bg-white p-6 rounded-xl shadow-md space-y-4">
                    <div>
                        <label class="block mb-1 font-medium">Nom complet</label>
                        <input type="text" name="name" required wire:model="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>
                    <div>
                        <label class="block mb-1 font-medium">Téléphone (WhatsApp)</label>
                        <input type="tel" name="phone" required wire:model="phone"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>
                    <div>
                        <label class="block mb-1 font-medium">Pays</label>
                        <input type="text" name="country" required wire:model="country"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">

                    </div>
                    <div>
                        <label class="block mb-1 font-medium">Message / Adresse</label>
                        <textarea name="message" rows="4" required wire:model="message"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition">
                        Envoyer la demande
                    </button>
                </form>
            </div>
        </div>
    </section>


    <script>
        window.addEventListener('form-submitted', () => {
            window.location.hash = 'order-form';
        });
    </script>
