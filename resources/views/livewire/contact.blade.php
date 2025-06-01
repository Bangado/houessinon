<div class="min-h-screen flex flex-col items-center justify-center px-4 py-24">

    <!-- Title -->
    <h1 class="text-5xl font-semibold text-center mb-6 leading-tight">Contact</h1>

    <!-- Description -->
    <p class="text-center text-[#6B6B6B] text-lg max-w-xl mb-12 leading-relaxed">
        Let’s work together. Fill out the form and we’ll be in touch as soon as possible.
    </p>

    <!-- Form -->
    <form class="w-full max-w-xl space-y-6">

        <!-- Name -->
        <div>
            <label class="block text-base font-medium mb-2" for="name">Name</label>
            <input type="text" id="name" placeholder="Your name"
                class="w-full border border-[#E4E4E7] rounded-2xl px-5 py-3 text-base focus:outline-none focus:ring-2 focus:ring-black transition placeholder:text-[#A1A1AA]" />
        </div>

        <!-- Email -->
        <div>
            <label class="block text-base font-medium mb-2" for="email">Email</label>
            <input type="email" id="email" placeholder="you@example.com"
                class="w-full border border-[#E4E4E7] rounded-2xl px-5 py-3 text-base focus:outline-none focus:ring-2 focus:ring-black transition placeholder:text-[#A1A1AA]" />
        </div>

        <!-- Message -->
        <div>
            <label class="block text-base font-medium mb-2" for="message">Message</label>
            <textarea id="message" placeholder="Your message" rows="5"
                class="w-full border border-[#E4E4E7] rounded-2xl px-5 py-3 text-base focus:outline-none focus:ring-2 focus:ring-black transition placeholder:text-[#A1A1AA] resize-none"></textarea>
        </div>

        <!-- Submit -->
        <button type="submit"
            class="w-full bg-black text-white text-base font-medium py-3 rounded-2xl hover:bg-[#1a1a1a] transition">
            Send
        </button>

    </form>
</div>
