<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="header">
        <!DOCTYPE html>

        <html class="light" lang="en">

        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>Elite Wheels | Premium Automotive Header</title>
            <!-- Tailwind CSS -->
            <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
            <!-- Material Symbols -->
            <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700;800&amp;family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
            <!-- Theme Configuration -->
            <script id="tailwind-config">
                tailwind.config = {
                    darkMode: "class",
                    theme: {
                        extend: {
                            "colors": {
                                "surface-container-lowest": "#ffffff",
                                "surface-bright": "#f8f9fa",
                                "on-primary-fixed-variant": "#930007",
                                "surface-tint": "#c0000c",
                                "on-tertiary": "#ffffff",
                                "tertiary-container": "#0071d4",
                                "surface": "#f8f9fa",
                                "on-surface": "#191c1d",
                                "surface-dim": "#d9dadb",
                                "surface-container-high": "#e7e8e9",
                                "error": "#ba1a1a",
                                "tertiary-fixed": "#d5e3ff",
                                "on-secondary-container": "#636262",
                                "outline-variant": "#e9bcb6",
                                "on-error-container": "#93000a",
                                "surface-container-highest": "#e1e3e4",
                                "secondary-fixed-dim": "#c8c6c5",
                                "inverse-on-surface": "#f0f1f2",
                                "tertiary-fixed-dim": "#a7c8ff",
                                "primary-fixed-dim": "#ffb4aa",
                                "surface-container": "#edeeef",
                                "tertiary": "#0059a8",
                                "on-error": "#ffffff",
                                "on-background": "#191c1d",
                                "on-primary": "#ffffff",
                                "on-secondary-fixed": "#1c1b1b",
                                "on-secondary": "#ffffff",
                                "on-surface-variant": "#5e3f3b",
                                "on-secondary-fixed-variant": "#474746",
                                "error-container": "#ffdad6",
                                "inverse-surface": "#2e3132",
                                "on-tertiary-fixed-variant": "#004788",
                                "on-primary-fixed": "#410001",
                                "surface-variant": "#e1e3e4",
                                "surface-container-low": "#f3f4f5",
                                "background": "#f8f9fa",
                                "primary-fixed": "#ffdad5",
                                "primary": "#b5000b",
                                "secondary-fixed": "#e5e2e1",
                                "on-primary-container": "#fff5f3",
                                "secondary-container": "#e2dfde",
                                "inverse-primary": "#ffb4aa",
                                "on-tertiary-fixed": "#001b3c",
                                "secondary": "#5f5e5e",
                                "primary-container": "#e30613",
                                "outline": "#936e69",
                                "on-tertiary-container": "#f5f7ff"
                            },
                            "borderRadius": {
                                "DEFAULT": "0.125rem",
                                "lg": "0.25rem",
                                "xl": "0.5rem",
                                "full": "0.75rem"
                            },
                            "spacing": {
                                "lg": "48px",
                                "base": "8px",
                                "gutter": "24px",
                                "xl": "80px",
                                "sm": "12px",
                                "margin-mobile": "16px",
                                "md": "24px",
                                "margin-desktop": "64px",
                                "xs": "4px"
                            },
                            "fontFamily": {
                                "display-lg-mobile": ["Hanken Grotesk"],
                                "body-lg": ["Inter"],
                                "body-md": ["Inter"],
                                "label-sm": ["JetBrains Mono"],
                                "headline-md": ["Hanken Grotesk"],
                                "display-lg": ["Hanken Grotesk"]
                            },
                            "fontSize": {
                                "display-lg-mobile": ["32px", {
                                    "lineHeight": "40px",
                                    "letterSpacing": "-0.01em",
                                    "fontWeight": "700"
                                }],
                                "body-lg": ["18px", {
                                    "lineHeight": "28px",
                                    "fontWeight": "400"
                                }],
                                "body-md": ["16px", {
                                    "lineHeight": "24px",
                                    "fontWeight": "400"
                                }],
                                "label-sm": ["12px", {
                                    "lineHeight": "16px",
                                    "fontWeight": "500"
                                }],
                                "headline-md": ["24px", {
                                    "lineHeight": "32px",
                                    "fontWeight": "600"
                                }],
                                "display-lg": ["48px", {
                                    "lineHeight": "56px",
                                    "letterSpacing": "-0.02em",
                                    "fontWeight": "700"
                                }]
                            }
                        },
                    },
                }
            </script>
            <style>
                .material-symbols-outlined {
                    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                    display: inline-block;
                    vertical-align: middle;
                }

                /* Custom scrollbar for clean minimalist look */
                ::-webkit-scrollbar {
                    width: 6px;
                }

                ::-webkit-scrollbar-track {
                    background: #f8f9fa;
                }

                ::-webkit-scrollbar-thumb {
                    background: #d9dadb;
                    border-radius: 10px;
                }
            </style>
        </head>

        <body class="bg-surface font-body-md text-on-surface antialiased">
            <!-- TopAppBar Component -->
            <header class="fixed top-0 w-full z-50 bg-surface dark:bg-inverse-surface border-b border-outline-variant/20 dark:border-outline/20">
                <div class="max-w-[1280px] mx-auto px-gutter h-20 flex items-center justify-between">
                    <!-- Brand Identity -->
                    <div class="flex items-center gap-xs">
                        <span class="font-headline-md text-headline-md font-bold tracking-tighter text-primary dark:text-primary-fixed-dim">
                            Elite Wheels
                        </span>
                    </div>
                    <!-- Navigation Links - Desktop -->
                    <nav class="hidden md:flex items-center space-x-lg">
                        <a class="text-secondary dark:text-secondary-fixed-dim font-medium hover:text-primary transition-colors font-body-md text-body-md" href="#">Inventory</a>
                        <a class="text-secondary dark:text-secondary-fixed-dim font-medium hover:text-primary transition-colors font-body-md text-body-md" href="#">Financing</a>
                        <a class="text-secondary dark:text-secondary-fixed-dim font-medium hover:text-primary transition-colors font-body-md text-body-md" href="#">Service</a>
                        <a class="text-secondary dark:text-secondary-fixed-dim font-medium hover:text-primary transition-colors font-body-md text-body-md" href="#">About Us</a>
                        <a class="text-secondary dark:text-secondary-fixed-dim font-medium hover:text-primary transition-colors font-body-md text-body-md" href="#">Contact</a>
                    </nav>
                    <!-- Actions Cluster -->
                    <div class="flex items-center gap-md">
                        <!-- Search Bar (Right aligned as per JSON) -->
                        <div class="hidden lg:flex items-center bg-surface-container-low dark:bg-surface-container-highest/10 px-sm py-xs rounded transition-all duration-200 focus-within:ring-1 focus-within:ring-primary">
                            <span class="material-symbols-outlined text-secondary mr-xs" data-icon="search">search</span>
                            <input class="bg-transparent border-none focus:ring-0 font-label-sm text-label-sm w-32 xl:w-48 placeholder:text-secondary/50" placeholder="Search Inventory" type="text" />
                        </div>
                        <!-- Secondary Action -->
                        <button class="hidden sm:block font-label-sm text-label-sm font-medium text-secondary dark:text-secondary-fixed-dim hover:text-primary transition-colors px-sm py-xs active:scale-95 duration-200 ease-in-out">
                            Login
                        </button>
                        <!-- Primary CTA -->
                        <button class="bg-primary-container text-on-primary-container px-md py-sm font-label-sm text-label-sm font-bold uppercase tracking-wider rounded-lg shadow-sm hover:brightness-110 active:scale-95 transition-all duration-200 ease-in-out">
                            Book Test Drive
                        </button>
                        <!-- Mobile Menu Trigger -->
                        <button class="md:hidden flex items-center justify-center p-xs text-on-surface" id="mobile-menu-toggle">
                            <span class="material-symbols-outlined" data-icon="menu">menu</span>
                        </button>
                    </div>
                </div>
            </header>
            <!-- Mobile Navigation Drawer (Hidden by default) -->
            <div class="fixed inset-0 z-[60] bg-surface transform translate-x-full transition-transform duration-300 md:hidden" id="mobile-drawer">
                <div class="p-gutter flex flex-col h-full">
                    <div class="flex justify-between items-center mb-xl">
                        <span class="font-headline-md text-headline-md font-bold tracking-tighter text-primary">Elite Wheels</span>
                        <button class="p-xs" id="mobile-menu-close">
                            <span class="material-symbols-outlined" data-icon="close">close</span>
                        </button>
                    </div>
                    <nav class="flex flex-col gap-lg flex-grow">
                        <a class="font-headline-md text-headline-md text-on-surface border-b border-outline-variant/10 pb-sm" href="#">Inventory</a>
                        <a class="font-headline-md text-headline-md text-on-surface border-b border-outline-variant/10 pb-sm" href="#">Financing</a>
                        <a class="font-headline-md text-headline-md text-on-surface border-b border-outline-variant/10 pb-sm" href="#">Service</a>
                        <a class="font-headline-md text-headline-md text-on-surface border-b border-outline-variant/10 pb-sm" href="#">About Us</a>
                        <a class="font-headline-md text-headline-md text-on-surface border-b border-outline-variant/10 pb-sm" href="#">Contact</a>
                    </nav>
                    <div class="mt-auto space-y-md">
                        <button class="w-full bg-primary-container text-on-primary-container py-md font-label-sm text-label-sm font-bold rounded-lg">
                            Book Test Drive
                        </button>
                        <button class="w-full border border-outline py-md font-label-sm text-label-sm font-bold rounded-lg text-secondary">
                            Login
                        </button>
                    </div>
                </div>
            </div>
            <!-- Script for mobile menu interaction -->
            <script>
                const toggleBtn = document.getElementById('mobile-menu-toggle');
                const closeBtn = document.getElementById('mobile-menu-close');
                const drawer = document.getElementById('mobile-drawer');

                toggleBtn.addEventListener('click', () => {
                    drawer.classList.remove('translate-x-full');
                });

                closeBtn.addEventListener('click', () => {
                    drawer.classList.add('translate-x-full');
                });

                // Close drawer on link click
                drawer.querySelectorAll('nav a').forEach(link => {
                    link.addEventListener('click', () => {
                        drawer.classList.add('translate-x-full');
                    });
                });
            </script>
        </body>

        </html>
    </div>
    @yield('content')
    <div id="footer">
        <!DOCTYPE html>

        <html class="light" lang="en">

        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
            <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Inter:wght@400;500;700&amp;family=JetBrains+Mono:wght@500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
            <style>
                .material-symbols-outlined {
                    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                }

                body {
                    margin: 0;
                    padding: 0;
                    background-color: #f8f9fa;
                }
            </style>
            <script id="tailwind-config">
                tailwind.config = {
                    darkMode: "class",
                    theme: {
                        extend: {
                            "colors": {
                                "surface-container-lowest": "#ffffff",
                                "surface-bright": "#f8f9fa",
                                "on-primary-fixed-variant": "#930007",
                                "surface-tint": "#c0000c",
                                "on-tertiary": "#ffffff",
                                "tertiary-container": "#0071d4",
                                "surface": "#f8f9fa",
                                "on-surface": "#191c1d",
                                "surface-dim": "#d9dadb",
                                "surface-container-high": "#e7e8e9",
                                "error": "#ba1a1a",
                                "tertiary-fixed": "#d5e3ff",
                                "on-secondary-container": "#636262",
                                "outline-variant": "#e9bcb6",
                                "on-error-container": "#93000a",
                                "surface-container-highest": "#e1e3e4",
                                "secondary-fixed-dim": "#c8c6c5",
                                "inverse-on-surface": "#f0f1f2",
                                "tertiary-fixed-dim": "#a7c8ff",
                                "primary-fixed-dim": "#ffb4aa",
                                "surface-container": "#edeeef",
                                "tertiary": "#0059a8",
                                "on-error": "#ffffff",
                                "on-background": "#191c1d",
                                "on-primary": "#ffffff",
                                "on-secondary-fixed": "#1c1b1b",
                                "on-secondary": "#ffffff",
                                "on-surface-variant": "#5e3f3b",
                                "on-secondary-fixed-variant": "#474746",
                                "error-container": "#ffdad6",
                                "inverse-surface": "#2e3132",
                                "on-tertiary-fixed-variant": "#004788",
                                "on-primary-fixed": "#410001",
                                "surface-variant": "#e1e3e4",
                                "surface-container-low": "#f3f4f5",
                                "background": "#f8f9fa",
                                "primary-fixed": "#ffdad5",
                                "primary": "#b5000b",
                                "secondary-fixed": "#e5e2e1",
                                "on-primary-container": "#fff5f3",
                                "secondary-container": "#e2dfde",
                                "inverse-primary": "#ffb4aa",
                                "on-tertiary-fixed": "#001b3c",
                                "secondary": "#5f5e5e",
                                "primary-container": "#e30613",
                                "outline": "#936e69",
                                "on-tertiary-container": "#f5f7ff"
                            },
                            "borderRadius": {
                                "DEFAULT": "0.125rem",
                                "lg": "0.25rem",
                                "xl": "0.5rem",
                                "full": "0.75rem"
                            },
                            "spacing": {
                                "lg": "48px",
                                "base": "8px",
                                "gutter": "24px",
                                "xl": "80px",
                                "sm": "12px",
                                "margin-mobile": "16px",
                                "md": "24px",
                                "margin-desktop": "64px",
                                "xs": "4px"
                            },
                            "fontFamily": {
                                "display-lg-mobile": ["Hanken Grotesk"],
                                "body-lg": ["Inter"],
                                "body-md": ["Inter"],
                                "label-sm": ["JetBrains Mono"],
                                "headline-md": ["Hanken Grotesk"],
                                "display-lg": ["Hanken Grotesk"]
                            },
                            "fontSize": {
                                "display-lg-mobile": ["32px", {
                                    "lineHeight": "40px",
                                    "letterSpacing": "-0.01em",
                                    "fontWeight": "700"
                                }],
                                "body-lg": ["18px", {
                                    "lineHeight": "28px",
                                    "fontWeight": "400"
                                }],
                                "body-md": ["16px", {
                                    "lineHeight": "24px",
                                    "fontWeight": "400"
                                }],
                                "label-sm": ["12px", {
                                    "lineHeight": "16px",
                                    "fontWeight": "500"
                                }],
                                "headline-md": ["24px", {
                                    "lineHeight": "32px",
                                    "fontWeight": "600"
                                }],
                                "display-lg": ["48px", {
                                    "lineHeight": "56px",
                                    "letterSpacing": "-0.02em",
                                    "fontWeight": "700"
                                }]
                            }
                        },
                    },
                }
            </script>
        </head>

        <body class="bg-surface">
            <!-- Spacer to simulate content absence
            <div class="h-screen flex items-center justify-center">
                <p class="font-body-md text-body-md text-secondary">Canvas content intentionally left blank.</p>
            </div> -->
            <!-- START OF FOOTER COMPONENT -->
            <footer class="w-full bg-surface-container-low border-t border-outline-variant/10">
                <!-- Main Footer Content -->
                <div class="max-w-[1280px] mx-auto px-gutter py-xl">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-lg">
                        <!-- Brand Identity Section -->
                        <div class="flex flex-col gap-md">
                            <div class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter uppercase">
                                Elite Wheels
                            </div>
                            <p class="font-body-md text-body-md text-secondary max-w-[280px]">
                                Engineering the future of automotive excellence through precision, luxury, and unmatched performance.
                            </p>
                            <div class="flex gap-base">
                                <a class="w-10 h-10 flex items-center justify-center bg-surface-container hover:bg-primary-container group transition-all duration-300" href="#">
                                    <span class="material-symbols-outlined text-secondary group-hover:text-on-primary transition-colors" data-icon="share">share</span>
                                </a>
                                <a class="w-10 h-10 flex items-center justify-center bg-surface-container hover:bg-primary-container group transition-all duration-300" href="#">
                                    <span class="material-symbols-outlined text-secondary group-hover:text-on-primary transition-colors" data-icon="paddock">padding</span>
                                </a>
                                <a class="w-10 h-10 flex items-center justify-center bg-surface-container hover:bg-primary-container group transition-all duration-300" href="#">
                                    <span class="material-symbols-outlined text-secondary group-hover:text-on-primary transition-colors" data-icon="sports_motorsports">sports_motorsports</span>
                                </a>
                            </div>
                        </div>
                        <!-- Experience Section -->
                        <div class="flex flex-col gap-md">
                            <h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Experience</h4>
                            <nav class="flex flex-col gap-base">
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Showroom Virtual Tour</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Performance Center</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Exclusive Events</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Bespoke Configurator</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Global Locations</a>
                            </nav>
                        </div>
                        <!-- Inquiry Section -->
                        <div class="flex flex-col gap-md">
                            <h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Inquiry</h4>
                            <nav class="flex flex-col gap-base">
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Financing Solutions</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Fleet Sales</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Service &amp; Maintenance</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Careers</a>
                                <a class="font-body-md text-body-md text-secondary hover:text-primary transition-colors duration-200" href="#">Contact Support</a>
                            </nav>
                        </div>
                        <!-- Intelligence (Newsletter) Section -->
                        <div class="flex flex-col gap-md">
                            <h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Intelligence</h4>
                            <p class="font-body-md text-body-md text-secondary">
                                Stay informed with the latest engineering breakthroughs and exclusive releases.
                            </p>
                            <form class="flex flex-col gap-sm focus-within:ring-2 focus-within:ring-primary p-[1px]">
                                <div class="relative">
                                    <input class="w-full bg-surface-container-highest/30 border-b border-outline-variant py-sm px-xs font-body-md text-body-md focus:outline-none focus:border-primary transition-all placeholder:text-secondary-fixed-dim" placeholder="Your engineering focus (Email)" type="email" />
                                </div>
                                <button class="w-full bg-primary-container text-on-primary py-sm font-label-sm text-label-sm uppercase tracking-widest hover:brightness-110 active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-xs" type="submit">
                                    Subscribe <span class="material-symbols-outlined text-[16px]" data-icon="arrow_forward">arrow_forward</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Bar -->
                <div class="bg-surface-container-low border-t border-outline-variant/10">
                    <div class="max-w-[1280px] mx-auto px-gutter py-md flex flex-col md:flex-row justify-between items-center gap-md">
                        <div class="font-label-sm text-label-sm text-secondary-fixed-variant">
                            © 2024 Elite Wheels Automotive Group. Engineered for Excellence.
                        </div>
                        <div class="flex gap-md">
                            <a class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors" href="#">Privacy Policy</a>
                            <a class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors" href="#">Terms of Service</a>
                            <a class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors" href="#">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END OF FOOTER COMPONENT -->
            <script>
                // Simple micro-interaction for the newsletter input
                const input = document.querySelector('input[type="email"]');
                input.addEventListener('focus', () => {
                    input.parentElement.classList.add('translate-x-1');
                });
                input.addEventListener('blur', () => {
                    input.parentElement.classList.remove('translate-x-1');
                });
            </script>
        </body>

        </html>
    </div>
</body>

</html>