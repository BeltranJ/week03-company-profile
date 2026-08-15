@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16">
        <p class="font-mono text-xs eyebrow text-teal mb-3">GET_IN_TOUCH</p>
        <h1 class="font-display text-4xl font-700 mb-4">Let's talk about your project.</h1>
        <p class="text-muted max-w-2xl leading-relaxed">
            Fill out the form and our team will get back to you within one business day.
        </p>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-20 grid md:grid-cols-5 gap-10">

        {{-- CONTACT FORM (UI only, not wired to a controller) --}}
        <div class="md:col-span-3 bg-white border border-line rounded-lg p-8">
            <form class="space-y-5">
                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label class="font-mono text-xs eyebrow text-muted block mb-2">FULL_NAME</label>
                        <input type="text" placeholder="Juan Dela Cruz"
                               class="w-full border border-line rounded-md px-4 py-3 text-sm focus:outline-none focus:border-teal">
                    </div>
                    <div>
                        <label class="font-mono text-xs eyebrow text-muted block mb-2">EMAIL</label>
                        <input type="email" placeholder="you@company.com"
                               class="w-full border border-line rounded-md px-4 py-3 text-sm focus:outline-none focus:border-teal">
                    </div>
                </div>

                <div>
                    <label class="font-mono text-xs eyebrow text-muted block mb-2">SUBJECT</label>
                    <input type="text" placeholder="Project inquiry"
                           class="w-full border border-line rounded-md px-4 py-3 text-sm focus:outline-none focus:border-teal">
                </div>

                <div>
                    <label class="font-mono text-xs eyebrow text-muted block mb-2">MESSAGE</label>
                    <textarea rows="5" placeholder="Tell us a bit about what you're building..."
                              class="w-full border border-line rounded-md px-4 py-3 text-sm focus:outline-none focus:border-teal"></textarea>
                </div>

                <button type="button"
                        class="bg-ink text-white font-mono text-sm px-6 py-3 rounded-md hover:bg-teal transition-colors">
                    Send Message
                </button>
                <p class="text-xs text-muted">This form is UI-only for this milestone — no backend submission yet.</p>
            </form>
        </div>

        {{-- COMPANY INFO --}}
        <div class="md:col-span-2 space-y-6">
            <div class="border border-line rounded-lg p-6">
                <p class="font-mono text-xs eyebrow text-teal mb-3">ADDRESS</p>
                <p class="text-sm text-muted leading-relaxed">123 Innovation Ave, Lipa City, Batangas, Philippines</p>
            </div>
            <div class="border border-line rounded-lg p-6">
                <p class="font-mono text-xs eyebrow text-teal mb-3">EMAIL</p>
                <p class="text-sm text-muted leading-relaxed">hello@nexabytesolutions.com</p>
            </div>
            <div class="border border-line rounded-lg p-6">
                <p class="font-mono text-xs eyebrow text-teal mb-3">PHONE</p>
                <p class="text-sm text-muted leading-relaxed">+63 912 345 6789</p>
            </div>
            <div class="border border-line rounded-lg p-6">
                <p class="font-mono text-xs eyebrow text-teal mb-3">SOCIAL</p>
                <div class="flex gap-4 text-sm">
                    <a href="#" class="text-muted hover:text-teal">Facebook</a>
                    <a href="#" class="text-muted hover:text-teal">LinkedIn</a>
                    <a href="#" class="text-muted hover:text-teal">Instagram</a>
                </div>
            </div>

            {{-- Map placeholder (embed a real Google Map iframe if desired) --}}
            <div class="border border-line rounded-lg h-40 bg-grid flex items-center justify-center">
                <p class="font-mono text-xs text-muted">MAP_EMBED_PLACEHOLDER</p>
            </div>
        </div>

    </section>

@endsection
