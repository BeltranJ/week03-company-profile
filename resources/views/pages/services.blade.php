@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16">
        <p class="font-mono text-xs eyebrow text-teal mb-3">WHAT_WE_OFFER</p>
        <h1 class="font-display text-4xl font-700 mb-4">Services</h1>
        <p class="text-muted max-w-2xl leading-relaxed">
            From first prototype to production infrastructure, here's how we help
            businesses build and maintain their technology.
        </p>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-20">
        <div class="grid md:grid-cols-2 gap-6">

            @php
                $services = [
                    ['code' => 'SVC_01', 'title' => 'Web Development', 'icon' => '</>', 'desc' => 'Custom websites and web applications built with modern frameworks like Laravel and React, tailored to how your business actually operates.'],
                    ['code' => 'SVC_02', 'title' => 'Mobile Development', 'icon' => '▢', 'desc' => 'Cross-platform Android and iOS apps for startups and enterprises, from MVP to full release.'],
                    ['code' => 'SVC_03', 'title' => 'UI/UX Design', 'icon' => '◇', 'desc' => 'User-centered interface design focused on usability, accessibility, and conversion.'],
                    ['code' => 'SVC_04', 'title' => 'Cloud Solutions', 'icon' => '☁', 'desc' => 'Cloud migration, hosting, and infrastructure management on AWS and Azure.'],
                    ['code' => 'SVC_05', 'title' => 'Cybersecurity', 'icon' => '◆', 'desc' => 'Vulnerability assessment, penetration testing, and security audits to keep your systems safe.'],
                    ['code' => 'SVC_06', 'title' => 'IT Consulting', 'icon' => '△', 'desc' => 'Technology strategy, digital transformation planning, and system architecture advice.'],
                ];
            @endphp

            @foreach ($services as $service)
                <div class="border border-line rounded-lg p-8 bg-white hover:border-teal transition-colors">
                    <div class="flex items-start justify-between mb-6">
                        <span class="text-3xl">{{ $service['icon'] }}</span>
                        <span class="font-mono text-xs text-teal">{{ $service['code'] }}</span>
                    </div>
                    <h3 class="font-display text-xl font-600 mb-2">{{ $service['title'] }}</h3>
                    <p class="text-sm text-muted leading-relaxed">{{ $service['desc'] }}</p>
                </div>
            @endforeach

        </div>
    </section>

@endsection
