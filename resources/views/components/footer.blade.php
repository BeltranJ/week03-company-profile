<footer class="bg-ink text-white mt-24">
    <div class="max-w-6xl mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">

        <div>
            <p class="font-display text-lg font-600">Nexa<span class="text-teal">Byte</span></p>
            <p class="text-sm text-white/60 mt-3 leading-relaxed">
                Engineering tomorrow's technology, today. We help SMEs build reliable,
                scalable digital products.
            </p>
        </div>

        <div>
            <p class="font-mono text-xs eyebrow text-teal mb-3">QUICK_LINKS</p>
            <ul class="space-y-2 text-sm text-white/70">
                <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-white">About</a></li>
                <li><a href="{{ url('/services') }}" class="hover:text-white">Services</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <div>
            <p class="font-mono text-xs eyebrow text-teal mb-3">CONTACT</p>
            <ul class="space-y-2 text-sm text-white/70">
                <li>123 Innovation Ave, Lipa City, Batangas, PH</li>
                <li>hello@nexabytesolutions.com</li>
                <li>+63 912 345 6789</li>
            </ul>
        </div>

        <div>
            <p class="font-mono text-xs eyebrow text-teal mb-3">FOLLOW</p>
            <ul class="space-y-2 text-sm text-white/70">
                <li><a href="#" class="hover:text-white">Facebook</a></li>
                <li><a href="#" class="hover:text-white">LinkedIn</a></li>
                <li><a href="#" class="hover:text-white">Instagram</a></li>
            </ul>
        </div>

    </div>

    <div class="border-t border-white/10">
        <div class="max-w-6xl mx-auto px-6 py-5 flex flex-col md:flex-row items-center justify-between gap-2">
            <p class="text-xs text-white/50">&copy; {{ date('Y') }} NexaByte Solutions. All rights reserved.</p>
            <p class="font-mono text-xs text-white/30">// built with laravel</p>
        </div>
    </div>
</footer>
