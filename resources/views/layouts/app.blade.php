<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NexaByte Solutions') | NexaByte Solutions</title>

    <!-- Tailwind CDN (swap for a proper Vite build before production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#0B1220',
                        panel: '#FFFFFF',
                        surface: '#F6F7FB',
                        muted: '#5B6478',
                        line: '#E2E5EE',
                        teal: '#0EA5A4',
                        amber: '#F5A524',
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                }
            }
        }
    </script>

    <style>
        body { background-color: #F6F7FB; }
        .bg-grid {
            background-image:
                linear-gradient(to right, #E2E5EE 1px, transparent 1px),
                linear-gradient(to bottom, #E2E5EE 1px, transparent 1px);
            background-size: 32px 32px;
        }
        .eyebrow { letter-spacing: 0.14em; }
        .terminal-window { box-shadow: 0 20px 50px -20px rgba(11,18,32,0.45); }
        .terminal-dot { width: 10px; height: 10px; border-radius: 9999px; }
        .caret { animation: blink 1s steps(1) infinite; }
        @keyframes blink { 50% { opacity: 0; } }
    </style>
</head>
<body class="font-body text-ink antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
