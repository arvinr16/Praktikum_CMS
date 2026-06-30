<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Aurum MOTORS') — Admin Access</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Hanken+Grotesk:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <!-- Tailwind CDN (Konsisten dengan Frontend) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-dim": "#131316",
                        "surface-container-low": "#1b1b1e",
                        "surface-container-high": "#2a2a2d",
                        "surface-container-highest": "#353438",
                        "on-surface": "#e4e1e6",
                        "on-surface-var": "#c6c6ca", 
                        "outline": "#909194",
                        "outline-variant": "#46464a",
                        "primary": "#e4e2e3",
                        "metallic-start": "#e23644",
                        "metallic-end": "#92001c",
                    },
                    fontFamily: {
                        "display": ["Sora"],
                        "body": ["Hanken Grotesk"],
                        "mono": ["JetBrains Mono"],
                    },
                },
            },
        };
    </script>

    <style>
        body { background-color: #131316; color: #e4e1e6; font-family: 'Hanken Grotesk', sans-serif; }
        
        /* Glassmorphism Panel */
        .glass-panel {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* === MAGIC CSS: Override Komponen Breeze agar jadi Dark Mode === */
        
        /* 1. Force Inputs (Text, Email, Password) to Dark */
        input[type="text"], input[type="email"], input[type="password"], input[type="checkbox"], textarea, select {
            background-color: #1b1b1e !important;
            border-color: #46464a !important;
            color: #e4e1e6 !important;
            border-radius: 8px !important;
            padding: 10px 14px !important;
            transition: all 0.2s !important;
        }
        input:focus, textarea:focus, select:focus {
            border-color: #e23644 !important;
            box-shadow: 0 0 0 2px rgba(226,54,68,0.2) !important;
            outline: none !important;
        }

        /* 2. Force Labels to Monospace & Outline Color */
        label {
            color: #909194 !important;
            font-family: 'JetBrains Mono', monospace !important;
            font-size: 11px !important;
            text-transform: uppercase !important;
            letter-spacing: 0.05em !important;
            margin-bottom: 6px !important;
        }

        /* 3. Force Primary Button to Metallic Red */
        button[type="submit"], .inline-flex.items-center.px-4.py-2.bg-gray-800 {
            background: linear-gradient(135deg, #e23644 0%, #92001c 100%) !important;
            color: white !important;
            border-radius: 8px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.05em !important;
            border: none !important;
            transition: all 0.3s !important;
            box-shadow: 0 4px 15px rgba(226, 54, 68, 0.3) !important;
        }
        button[type="submit"]:hover {
            box-shadow: 0 8px 25px rgba(226, 54, 68, 0.5) !important;
            transform: translateY(-1px) !important;
        }

        /* 4. Links & Errors */
        a { color: #e23644; transition: all 0.2s; }
        a:hover { color: #ff4d5a; }
        .text-sm.text-red-600 { color: #ff4d5a !important; } /* Error messages */
        .text-gray-600, .text-gray-500, .text-gray-700 { color: #c6c6ca !important; } /* Breeze default text */
    </style>
</head>
<body class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Grid & Glow (Konsisten dengan Frontend) -->
    <div class="fixed inset-0 pointer-events-none z-0" style="background-size: 50px 50px; background-image: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px), linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px); mask-image: radial-gradient(circle at center, black, transparent 80%);"></div>
    <div class="fixed inset-0 z-0 pointer-events-none" style="background: radial-gradient(600px circle at 50% 50%, rgba(226, 54, 68, 0.1), transparent 40%);"></div>

    <div class="w-full max-w-md relative z-10 px-4">
        <!-- Logo / Brand -->
        <div class="text-center mb-8">
            <a href="/" class="font-display text-3xl font-bold tracking-tighter text-primary">
                aurum <span class="text-metallic-start">MOTORS</span>
            </a>
            <p class="font-mono text-[11px] text-outline tracking-widest uppercase mt-2">Admin Portal Access</p>
        </div>

        <!-- Form Container (Glassmorphism) -->
        <div class="glass-panel p-8 rounded-2xl shadow-2xl">
            {{ $slot }}
        </div>

        <!-- Back to Home Link -->
        <div class="mt-6 text-center">
            <a href="/" class="font-mono text-xs text-outline hover:text-primary transition-colors flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>