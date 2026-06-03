<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&amp;family=Hanken+Grotesk:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#474647",
                        "on-secondary-container": "#acb6c2",
                        "inverse-on-surface": "#303033",
                        "on-secondary": "#28313b",
                        "on-error-container": "#ffdad6",
                        "surface-container-lowest": "#0e0e11",
                        "inverse-surface": "#e4e1e6",
                        "surface-container-high": "#2a2a2d",
                        "on-tertiary-fixed-variant": "#92001c",
                        "secondary": "#bdc8d3",
                        "error": "#ffb4ab",
                        "error-container": "#93000a",
                        "on-primary": "#313031",
                        "surface-variant": "#353438",
                        "secondary-container": "#3e4852",
                        "on-tertiary-fixed": "#410007",
                        "tertiary": "#ffb3b1",
                        "on-error": "#690005",
                        "on-surface-variant": "#c7c6ca",
                        "primary-fixed": "#e5e2e3",
                        "surface-container": "#1f1f22",
                        "tertiary-fixed-dim": "#ffb3b1",
                        "primary-container": "#0a0a0b",
                        "primary": "#c8c6c7",
                        "outline-variant": "#46464a",
                        "outline": "#919094",
                        "surface-container-low": "#1b1b1e",
                        "on-primary-fixed": "#1c1b1c",
                        "on-tertiary": "#680011",
                        "primary-fixed-dim": "#c8c6c7",
                        "surface-container-highest": "#353438",
                        "on-secondary-fixed": "#131d25",
                        "surface-tint": "#c8c6c7",
                        "inverse-primary": "#5f5e5f",
                        "tertiary-container": "#200002",
                        "secondary-fixed": "#dae3f0",
                        "on-primary-container": "#7a797a",
                        "on-tertiary-container": "#e23644",
                        "secondary-fixed-dim": "#bdc8d3",
                        "tertiary-fixed": "#ffdad8",
                        "on-surface": "#e4e1e6",
                        "background": "#131316",
                        "on-secondary-fixed-variant": "#3e4852",
                        "surface": "#131316",
                        "on-background": "#e4e1e6",
                        "surface-bright": "#39393c",
                        "surface-dim": "#131316"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-desktop": "80px",
                        "gutter": "32px",
                        "container-max": "1440px",
                        "margin-mobile": "20px",
                        "section-gap": "120px"
                    },
                    "fontFamily": {
                        "headline-xl": ["Sora"],
                        "headline-md": ["Sora"],
                        "body-lg": ["Hanken Grotesk"],
                        "headline-xl-mobile": ["Sora"],
                        "body-md": ["Hanken Grotesk"],
                        "label-sm": ["JetBrains Mono"],
                        "display-lg": ["Sora"]
                    },
                    "fontSize": {
                        "headline-xl": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["32px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "headline-xl-mobile": ["32px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "1.0",
                            "letterSpacing": "0.1em",
                            "fontWeight": "500"
                        }],
                        "display-lg": ["72px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .glass-effect {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .btn-metallic {
            background: linear-gradient(180deg, #e23644 0%, #92001c 100%);
            box-shadow: 0 4px 15px rgba(226, 54, 68, 0.3);
        }

        .text-glow {
            text-shadow: 0 0 20px rgba(200, 198, 199, 0.2);
        }
    </style>
</head>

<body class="bg-background text-on-background selection:bg-tertiary/30">
    <!-- Top Navigation Bar -->
    <nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl dark:bg-surface/80 shadow-sm border-b border-white/10">
        <div class="flex justify-between items-center h-20 px-margin-desktop max-w-container-max mx-auto">
            <div class="font-headline-md text-headline-md tracking-tighter text-on-surface dark:text-on-surface uppercase">
                AURUM MOTORS
            </div>
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-body-md text-body-md text-primary border-b-2 border-primary pb-1" href="{{ route('index') }}">Home</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="#">Services</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('page') }}">About Us</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="#">Contact</a>
            </div>
            <button class="active:scale-95 transition-transform bg-primary-container border border-outline px-6 py-2 rounded-lg font-body-md text-body-md text-on-surface hover:bg-surface-container-high">
                Book Test Drive
            </button>
        </div>
    </nav>
    <!-- Hero Section -->
    <header class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" data-alt="A side-profile shot of a sleek, silver Porsche 911 GT3 RS parked in a dimly lit, minimalist architectural space with sharp concrete lines. The car's metallic surfaces catch subtle overhead rim lighting, emphasizing its aerodynamic curves. The atmosphere is cold, luxurious, and powerful, with a deep obsidian background that makes the silver paint pop. High-end automotive photography style with cinematic depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0-WoapBJozsA7wN3jMi9Gmd5RcjpU6g16OIDAiFgGzkpUMrYf0nrW3A0__a2VRgjhgQNEFJDl-OEcOgNaiWbtr2YtMaTxFeuxvSMB9kNHCGgjxXDaMRjOGImdnyesJ6fCfYBDwBbBMg_dKrJ4xCBMQRvx_6n6zZw6eFnHKUQZBQgvTBa9Ng7O6TA82Xj9kksFHh7zxVlXtF6c_geiZjUMK-qtB4-aVZpMJ_uTgFnCT8BekhjnBSqzd428cJkskRAnAUDsVaN7hiw" />
            <div class="absolute inset-0 bg-gradient-to-r from-background via-transparent to-transparent opacity-80"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 w-full px-margin-desktop max-w-container-max mx-auto">
            <div class="max-w-4xl">
                <p class="font-label-sm text-label-sm text-tertiary mb-4 tracking-[0.3em] uppercase">The Pinnacle of Automotive Artistry</p>
                <h1 class="font-display-lg text-display-lg mb-8 text-glow uppercase leading-tight">
                    Engineering Excellence.<br />
                    <span class="text-primary-fixed-dim">Unmatched Performance.</span>
                </h1>
                <div class="flex gap-6">
                    <button class="btn-metallic px-10 py-4 rounded-lg font-body-lg text-white font-bold transition-all hover:brightness-110 active:scale-95 uppercase tracking-wider">
                        Explore Inventory
                    </button>
                    <button class="px-10 py-4 rounded-lg font-body-lg text-on-surface border border-outline hover:bg-surface-container transition-colors uppercase tracking-wider">
                        The Vision
                    </button>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce opacity-50">
            <span class="font-label-sm text-label-sm">SCROLL</span>
            <span class="material-symbols-outlined">expand_more</span>
        </div>
    </header>
    @yield('content')
    <footer class="w-full pt-section-gap pb-12 bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop max-w-container-max mx-auto">
            <div class="col-span-1 md:col-span-1">
                <div class="font-headline-md text-headline-md text-primary uppercase mb-6">AURUM MOTORS</div>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8">Elevating the standards of high-performance automotive excellence since 1999.</p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-background transition-all" href="#">
                        <span class="material-symbols-outlined text-sm">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-background transition-all" href="#">
                        <span class="material-symbols-outlined text-sm">share</span>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-label-sm text-label-sm text-on-surface uppercase tracking-widest mb-6">Quick Links</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Inventory</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Sell Your Car</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Locations</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-sm text-label-sm text-on-surface uppercase tracking-widest mb-6">Support</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Financial Services</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Contact Support</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-sm text-label-sm text-on-surface uppercase tracking-widest mb-6">Newsletter</h4>
                <p class="font-body-md text-body-md text-on-surface-variant mb-4">Stay updated with our latest collections.</p>
                <div class="flex border-b border-outline-variant pb-2">
                    <input class="bg-transparent border-none focus:ring-0 font-label-sm text-label-sm w-full placeholder:text-outline" placeholder="ENTER EMAIL" type="email" />
                    <button class="material-symbols-outlined text-primary">arrow_forward</button>
                </div>
            </div>
        </div>
        <div class="mt-20 pt-8 border-t border-outline-variant/30 px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="font-label-sm text-label-sm text-on-surface-variant">© 2024 AURUM MOTORS. ENGINEERING EXCELLENCE REDEFINED.</span>
            <div class="flex gap-8">
                <span class="font-label-sm text-label-sm text-on-surface-variant">PRIVACY</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">COOKIES</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">ACCESSIBILITY</span>
            </div>
        </div>
    </footer>
    <script>
        // Micro-interactions for scrolling
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('py-2');
                nav.classList.remove('py-4');
            } else {
                nav.classList.add('py-4');
                nav.classList.remove('py-2');
            }
        });

        // Simple hover effect for cards
        const cards = document.querySelectorAll('.group');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Subtle lift or border change handled by Tailwind classes
            });
        });
    </script>
</body>

</html>