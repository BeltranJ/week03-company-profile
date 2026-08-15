@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- HERO --}}
    <section class="bg-grid border-b border-line">
        <div class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-14 items-center">

            <div>
                <p class="font-mono text-xs eyebrow text-teal mb-4">JUNIOR_DEV_STARTUP // EST. 2023</p>
                <h1 class="font-display text-4xl md:text-5xl font-700 leading-tight">
                    Building digital solutions that move your business forward.
                </h1>
                <p class="text-muted mt-5 leading-relaxed">
                    NexaByte Solutions partners with SMEs to design, build, and ship
                    software that actually gets used — from company websites to
                    full cloud infrastructure.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ url('/contact') }}"
                       class="bg-ink text-white font-mono text-sm px-6 py-3 rounded-md hover:bg-teal transition-colors">
                        Get a Free Consultation
                    </a>
                    <a href="{{ url('/services') }}"
                       class="border border-line font-mono text-sm px-6 py-3 rounded-md hover:border-ink transition-colors">
                        View Services
                    </a>
                </div>
            </div>

            {{-- Signature element: terminal mockup --}}
            <div class="terminal-window rounded-xl overflow-hidden border border-line">
                <div class="bg-ink px-4 py-3 flex items-center gap-2">
                    <span class="terminal-dot bg-[#F87171]"></span>
                    <span class="terminal-dot bg-[#FBBF24]"></span>
                    <span class="terminal-dot bg-[#34D399]"></span>
                    <span class="font-mono text-xs text-white/40 ml-2">nexabyte — zsh</span>
                </div>
                <div class="bg-ink text-[#6EE7DD] font-mono text-sm px-5 py-6 leading-7">
                    <p><span class="text-white/40">$</span> nexabyte deploy --client=you</p>
                    <p class="text-white/50">→ analyzing requirements...</p>
                    <p class="text-white/50">→ designing UI/UX...</p>
                    <p class="text-white/50">→ provisioning cloud infra...</p>
                    <p class="text-amber">✓ deployment successful</p>
                    <p><span class="text-white/40">$</span> <span class="caret">▌</span></p>
                </div>
            </div>

        </div>
    </section>

    {{-- COMPANY INTRO --}}
    <section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-3 gap-10">
        <div class="md:col-span-1">
            <p class="font-mono text-xs eyebrow text-teal mb-3">WHO_WE_ARE</p>
            <h2 class="font-display text-2xl font-600">A small team, shipping real software.</h2>
        </div>
        <div class="md:col-span-2 text-muted leading-relaxed">
            <p>
                Founded in 2023, NexaByte Solutions began as a two-person freelance
                team helping local shops get online. Today we're a 12-person agency
                offering web, mobile, and cloud services to SMEs across the
                Philippines — built on the same principle we started with: build it
                properly, or don't build it at all.
            </p>
        </div>
    </section>

    {{-- FEATURED SERVICES --}}
    <section class="bg-panel border-y border-line">
        <div class="max-w-6xl mx-auto px-6 py-20">
            <p class="font-mono text-xs eyebrow text-teal mb-3">FEATURED_SERVICES</p>
            <h2 class="font-display text-2xl font-600 mb-10">What we build</h2>

            <div class="grid md:grid-cols-3 gap-6">
                @php
                    $featured = [
                        ['code' => 'SVC_01', 'title' => 'Web Development', 'desc' => 'Custom websites and web apps built with modern frameworks like Laravel and React.'],
                        ['code' => 'SVC_02', 'title' => 'Mobile Development', 'desc' => 'Cross-platform Android and iOS apps for startups and enterprises.'],
                        ['code' => 'SVC_04', 'title' => 'Cloud Solutions', 'desc' => 'Cloud migration, hosting, and infrastructure management on AWS and Azure.'],
                    ];
                @endphp

                @foreach ($featured as $service)
                    <div class="border border-line rounded-lg p-6 hover:border-teal transition-colors">
                        <p class="font-mono text-xs text-teal mb-3">{{ $service['code'] }}</p>
                        <h3 class="font-display font-600 text-lg mb-2">{{ $service['title'] }}</h3>
                        <p class="text-sm text-muted leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="max-w-6xl mx-auto px-6 py-20 text-center">
        <h2 class="font-display text-3xl font-700 mb-4">Ready to build something reliable?</h2>
        <p class="text-muted mb-8 max-w-xl mx-auto">
            Tell us about your project and we'll get back to you within one business day.
        </p>
        <a href="{{ url('/contact') }}"
           class="inline-block bg-teal text-white font-mono text-sm px-8 py-3 rounded-md hover:bg-ink transition-colors">
            Start a Conversation
        </a>
    </section>

@endsection
