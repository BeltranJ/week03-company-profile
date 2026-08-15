<header class="sticky top-0 z-50 bg-panel/90 backdrop-blur border-b border-line">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <a href="{{ url('/') }}" class="font-display font-700 text-xl tracking-tight">
            Nexa<span class="text-teal">Byte</span>
        </a>

        <!-- Desktop nav -->
        <nav class="hidden md:flex items-center gap-8 font-mono text-sm">
            <a href="{{ url('/') }}" class="hover:text-teal transition-colors {{ request()->is('/') ? 'text-teal' : 'text-ink' }}">Home</a>
            <a href="{{ url('/about') }}" class="hover:text-teal transition-colors {{ request()->is('about') ? 'text-teal' : 'text-ink' }}">About</a>
            <a href="{{ url('/services') }}" class="hover:text-teal transition-colors {{ request()->is('services') ? 'text-teal' : 'text-ink' }}">Services</a>
            <a href="{{ url('/contact') }}" class="hover:text-teal transition-colors {{ request()->is('contact') ? 'text-teal' : 'text-ink' }}">Contact</a>
        </nav>

        <a href="{{ url('/contact') }}"
           class="hidden md:inline-block bg-ink text-white text-sm font-mono px-4 py-2 rounded-md hover:bg-teal transition-colors">
            Get In Touch
        </a>

        <!-- Mobile toggle (pure CSS checkbox trick, no JS dependency) -->
        <label for="nav-toggle" class="md:hidden cursor-pointer select-none text-2xl leading-none">&#9776;</label>
    </div>

    <input type="checkbox" id="nav-toggle" class="hidden peer">
    <nav class="md:hidden hidden peer-checked:flex flex-col gap-1 px-6 pb-4 font-mono text-sm border-t border-line bg-panel">
        <a href="{{ url('/') }}" class="py-2">Home</a>
        <a href="{{ url('/about') }}" class="py-2">About</a>
        <a href="{{ url('/services') }}" class="py-2">Services</a>
        <a href="{{ url('/contact') }}" class="py-2">Contact</a>
    </nav>
</header>
