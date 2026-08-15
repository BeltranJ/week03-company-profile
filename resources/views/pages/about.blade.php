@extends('layouts.app')

@section('title', 'About')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16">
        <p class="font-mono text-xs eyebrow text-teal mb-3">ABOUT_US</p>
        <h1 class="font-display text-4xl font-700 mb-6">The story so far.</h1>
    </section>

    {{-- COMPANY HISTORY --}}
    <section class="max-w-6xl mx-auto px-6 pb-16 grid md:grid-cols-3 gap-10">
        <h2 class="font-display text-2xl font-600">Company History</h2>
        <div class="md:col-span-2 text-muted leading-relaxed space-y-4">
            <p>
                NexaByte Solutions was founded in 2023 by a small team of developers
                who wanted to help local businesses modernize their digital presence.
                What started as a two-person freelance operation has since grown into
                a 12-person agency serving small and medium enterprises across the
                Philippines.
            </p>
            <p>
                Along the way, the team has shipped everything from single-page
                brochure sites to full cloud-hosted platforms — always with the same
                focus on clean architecture and long-term maintainability.
            </p>
        </div>
    </section>

    {{-- MISSION & VISION --}}
    <section class="bg-panel border-y border-line">
        <div class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-8">
            <div class="border border-line rounded-lg p-8 bg-white">
                <p class="font-mono text-xs eyebrow text-teal mb-3">MISSION</p>
                <p class="text-muted leading-relaxed">
                    To empower businesses of all sizes with reliable, affordable, and
                    scalable technology solutions that drive growth and efficiency.
                </p>
            </div>
            <div class="border border-line rounded-lg p-8 bg-white">
                <p class="font-mono text-xs eyebrow text-amber mb-3">VISION</p>
                <p class="text-muted leading-relaxed">
                    To become a leading IT solutions provider in Southeast Asia,
                    known for innovation, integrity, and client-centered service.
                </p>
            </div>
        </div>
    </section>

    {{-- CORE VALUES --}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <p class="font-mono text-xs eyebrow text-teal mb-3">CORE_VALUES</p>
        <h2 class="font-display text-2xl font-600 mb-10">What guides our work</h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-5 gap-6">
            @foreach ([
                ['title' => 'Innovation', 'desc' => 'Always exploring better ways to solve problems.'],
                ['title' => 'Integrity', 'desc' => 'Honest, transparent client relationships.'],
                ['title' => 'Excellence', 'desc' => 'High-quality deliverables, no shortcuts.'],
                ['title' => 'Collaboration', 'desc' => 'Teamwork across clients and developers.'],
                ['title' => 'Adaptability', 'desc' => 'Staying current with technology trends.'],
            ] as $value)
                <div class="border-t-2 border-teal pt-4">
                    <h3 class="font-display font-600 mb-2">{{ $value['title'] }}</h3>
                    <p class="text-sm text-muted leading-relaxed">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- TEAM --}}
    <section class="bg-panel border-t border-line">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <p class="font-mono text-xs eyebrow text-teal mb-3">THE_TEAM</p>
            <h2 class="font-display text-2xl font-600 mb-10">Who's building it</h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ([
                    ['name' => 'Juan Dela Cruz', 'role' => 'Founder & Lead Developer'],
                    ['name' => 'Maria Santos', 'role' => 'UI/UX Designer'],
                    ['name' => 'Carlos Reyes', 'role' => 'Backend Engineer'],
                    ['name' => 'Angela Cruz', 'role' => 'Project Manager'],
                ] as $member)
                    <div class="bg-white border border-line rounded-lg p-6 text-center">
                        <div class="w-14 h-14 rounded-full bg-ink text-white font-mono text-sm flex items-center justify-center mx-auto mb-4">
                            {{ collect(explode(' ', $member['name']))->map(fn($n) => $n[0])->join('') }}
                        </div>
                        <h3 class="font-display font-600">{{ $member['name'] }}</h3>
                        <p class="text-xs text-muted font-mono mt-1">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
