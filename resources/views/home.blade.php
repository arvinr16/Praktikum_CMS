@extends('layouts.front')
@section('content')
<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LaravelApp - The PHP Framework for Web Artisans</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#505f76",
                        "on-surface": "#191c1e",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-tertiary-container": "#eef0ff",
                        "surface-dim": "#d8dadc",
                        "outline": "#737686",
                        "tertiary-fixed": "#dae2fd",
                        "inverse-primary": "#b4c5ff",
                        "surface-tint": "#0053db",
                        "primary-container": "#2563eb",
                        "inverse-surface": "#2d3133",
                        "secondary-fixed": "#d3e4fe",
                        "primary": "#004ac6",
                        "surface-container-highest": "#e0e3e5",
                        "surface-container-low": "#f2f4f6",
                        "error-container": "#ffdad6",
                        "surface-variant": "#e0e3e5",
                        "tertiary": "#4d556b",
                        "on-surface-variant": "#434655",
                        "tertiary-container": "#656d84",
                        "surface-container-high": "#e6e8ea",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#54647a",
                        "on-error": "#ffffff",
                        "surface": "#f7f9fb",
                        "on-primary-container": "#eeefff",
                        "surface-bright": "#f7f9fb",
                        "secondary-container": "#d0e1fb",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#b7c8e1",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#dbe1ff",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#00174b",
                        "on-secondary-fixed": "#0b1c30",
                        "inverse-on-surface": "#eff1f3",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#eceef0",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-secondary-fixed-variant": "#38485d",
                        "on-background": "#191c1e",
                        "on-tertiary-fixed": "#131b2e",
                        "background": "#f7f9fb",
                        "tertiary-fixed-dim": "#bec6e0",
                        "outline-variant": "#c3c6d7"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "2xl": "48px",
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "md": "16px",
                        "lg": "24px",
                        "xl": "32px",
                        "3xl": "64px",
                        "margin-desktop": "32px",
                        "base": "8px",
                        "xs": "4px",
                        "sm": "12px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-xl": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-sm": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-xl-mobile": ["28px", {
                            "lineHeight": "34px",
                            "fontWeight": "700"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-xl": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "headline-lg": ["30px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hero-gradient {
            background: radial-gradient(circle at 50% 50%, rgba(37, 99, 235, 0.05) 0%, transparent 70%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
        }
    </style>
</head>

<body class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <!-- Header Section -->
    <header class="fixed top-0 w-full z-50 bg-surface border-b border-outline-variant">
        <div class="flex justify-between items-center h-16 px-margin-desktop max-w-[1440px] mx-auto">
            <div class="font-headline-sm text-headline-sm font-bold text-primary">LaravelApp</div>
            <nav class="hidden md:flex gap-xl items-center">
                <a class="text-primary font-bold border-b-2 border-primary font-body-md text-body-md h-full flex items-center" href="#">Home</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-md text-body-md" href="#">Features</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-md text-body-md" href="#">Pricing</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-md text-body-md" href="#">Documentation</a>
            </nav>
            <button class="bg-primary text-on-primary px-lg py-xs rounded-xl hover:bg-surface-tint transition-all duration-200 ease-in-out font-label-md text-label-md">
                Get Started
            </button>
        </div>
    </header>
    <main class="pt-16">
        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-3xl pb-2xl hero-gradient">
            <div class="max-w-[1440px] mx-auto px-margin-desktop grid md:grid-cols-2 gap-xl items-center">
                <div class="z-10">
                    <h1 class="font-headline-xl text-headline-xl mb-md">
                        The PHP Framework for <span class="text-primary">Web Artisans</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-secondary mb-xl max-w-lg">
                        Laravel adalah kerangka kerja aplikasi web dengan sintaks yang elegan dan ekspresif. Kami telah meletakkan dasar bagi Anda untuk membangun tanpa mengkhawatirkan hal-hal kecil.
                    </p>
                    <div class="flex flex-wrap gap-md">
                        <button class="bg-primary text-on-primary px-xl py-sm rounded-xl font-label-md text-label-md hover:shadow-lg transition-all">
                            Get Started
                        </button>
                        <button class="border border-outline text-on-surface px-xl py-sm rounded-xl font-label-md text-label-md hover:bg-surface-container transition-all">
                            Documentation
                        </button>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute -inset-4 bg-primary-container/10 rounded-2xl blur-2xl group-hover:bg-primary-container/20 transition-all duration-700"></div>
                    <img alt="Dashboard Interface" class="relative rounded-xl border border-outline-variant shadow-2xl" data-alt="A clean and professional software dashboard interface displayed on a high-resolution monitor. The UI features a minimalist aesthetic with a soft light-mode background, sophisticated data visualizations, and clear navigation sidebars. The lighting is bright and even, highlighting the meticulous alignment and professional blue color palette of the application design." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBElPPuDqmOTY-ct8rSkkug6iE3xDBT8VjDVNtR1ymx28W_Uh3qWX4Qp6Nu1GBdI36W400j3YeVaTdAXd3XaCr3FFjD0QggoZPfBwsgOb0OnmLVpYLDDqa_t6zqH4oseBk6wNeALpcAmexDTCVuaWjusRJPJRZIuID8GBQNdfKrHg0uILroIxvHFjW5mLnhbRh0J80nsnuY0bYo974m7yZblHtqNppkLOqVbf_Kp934oJINhNoldaRT2ssSBjs2Bzt06MtRv1SePLY" />
                </div>
            </div>
        </section>
        <!-- Stats Section -->
        <section class="bg-surface-container-low py-xl">
            <div class="max-w-[1440px] mx-auto px-margin-desktop">
                <div class="flex flex-wrap justify-around gap-xl items-center opacity-80">
                    <div class="text-center">
                        <div class="font-headline-md text-headline-md text-primary">100k+</div>
                        <div class="font-label-sm text-label-sm text-secondary">Github Stars</div>
                    </div>
                    <div class="text-center">
                        <div class="font-headline-md text-headline-md text-primary">1M+</div>
                        <div class="font-label-sm text-label-sm text-secondary">Developers</div>
                    </div>
                    <div class="text-center">
                        <div class="font-headline-md text-headline-md text-primary">20M+</div>
                        <div class="font-label-sm text-label-sm text-secondary">Downloads/mo</div>
                    </div>
                    <div class="text-center">
                        <div class="font-headline-md text-headline-md text-primary">#1</div>
                        <div class="font-label-sm text-label-sm text-secondary">PHP Framework</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section -->
        <section class="py-3xl bg-surface">
            <div class="max-w-[1440px] mx-auto px-margin-desktop">
                <div class="text-center mb-2xl">
                    <h2 class="font-headline-lg text-headline-lg mb-base">Mengapa Laravel?</h2>
                    <div class="h-1 w-20 bg-primary mx-auto rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-lg">
                    <!-- Feature 1 -->
                    <div class="p-lg bg-surface-container-lowest border border-outline-variant rounded-xl hover:border-primary transition-all group">
                        <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-md group-hover:bg-primary group-hover:text-on-primary transition-colors">
                            <span class="material-symbols-outlined" data-icon="auto_awesome">auto_awesome</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm mb-sm">Elegant Syntax</h3>
                        <p class="font-body-md text-body-md text-secondary">
                            Sintaks yang bersih dan mudah dibaca memungkinkan pengembang untuk fokus pada logika bisnis daripada detail infrastruktur.
                        </p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="p-lg bg-surface-container-lowest border border-outline-variant rounded-xl hover:border-primary transition-all group">
                        <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-md group-hover:bg-primary group-hover:text-on-primary transition-colors">
                            <span class="material-symbols-outlined" data-icon="security">security</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm mb-sm">Built-in Security</h3>
                        <p class="font-body-md text-body-md text-secondary">
                            Proteksi bawaan terhadap SQL injection, Cross-Site Scripting (XSS), dan Cross-Site Request Forgery (CSRF) menjaga aplikasi Anda tetap aman.
                        </p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="p-lg bg-surface-container-lowest border border-outline-variant rounded-xl hover:border-primary transition-all group">
                        <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-md group-hover:bg-primary group-hover:text-on-primary transition-colors">
                            <span class="material-symbols-outlined" data-icon="hub">hub</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm mb-sm">Powerful Ecosystem</h3>
                        <p class="font-body-md text-body-md text-secondary">
                            Gunakan alat seperti Forge, Vapor, dan Nova untuk mempercepat pengembangan dan manajemen infrastruktur secara menyeluruh.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-3xl">
            <div class="max-w-[1200px] mx-auto px-margin-desktop">
                <div class="bg-inverse-surface rounded-2xl p-2xl text-center relative overflow-hidden">
                    <!-- Decorative background element -->
                    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-64 h-64 bg-primary/20 blur-3xl rounded-full"></div>
                    <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-64 h-64 bg-primary-container/10 blur-3xl rounded-full"></div>
                    <div class="relative z-10">
                        <h2 class="font-headline-lg text-headline-lg text-inverse-on-surface mb-md">Siap membangun karya besar berikutnya?</h2>
                        <p class="font-body-lg text-body-lg text-secondary-fixed-dim mb-xl max-w-2xl mx-auto">
                            Bergabunglah dengan jutaan pengembang di seluruh dunia yang telah memilih Laravel untuk aplikasi mereka.
                        </p>
                        <button class="bg-primary text-on-primary px-3xl py-sm rounded-xl font-label-md text-label-md hover:bg-surface-tint transition-all hover:scale-105 active:scale-95">
                            Start for Free
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer Section -->
    <footer class="bg-surface-container-lowest py-xl border-t border-outline-variant">
        <div class="max-w-[1440px] mx-auto px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-md">
            <div class="flex flex-col gap-xs">
                <div class="font-headline-sm text-headline-sm font-bold text-primary">LaravelApp</div>
                <p class="font-body-sm text-body-sm text-secondary">© 2024 LaravelApp. All rights reserved.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-lg">
                <a class="text-secondary hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Home</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Features</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Pricing</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Documentation</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Privacy</a>
                <a class="text-secondary hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Terms</a>
            </div>
        </div>
    </footer>
    <script>
        // Simple micro-interaction for scroll effects
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
</body>

</html>
@endsection