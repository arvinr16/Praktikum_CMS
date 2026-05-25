@extends('layouts.front')
@section('content')
<div id="home">
    <!DOCTYPE html>

    <html class="light" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Elite Wheels | Engineered for Excellence</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "tertiary-fixed-dim": "#a7c8ff",
                            "inverse-surface": "#2e3132",
                            "on-secondary-fixed": "#1c1b1b",
                            "on-background": "#191c1d",
                            "surface-container-highest": "#e1e3e4",
                            "outline": "#936e69",
                            "on-primary-container": "#fff5f3",
                            "on-surface": "#191c1d",
                            "on-secondary-container": "#636262",
                            "inverse-on-surface": "#f0f1f2",
                            "surface-container-high": "#e7e8e9",
                            "on-error-container": "#93000a",
                            "on-tertiary": "#ffffff",
                            "on-primary": "#ffffff",
                            "on-error": "#ffffff",
                            "on-secondary": "#ffffff",
                            "on-primary-fixed-variant": "#930007",
                            "secondary-container": "#e2dfde",
                            "surface": "#f8f9fa",
                            "secondary": "#5f5e5e",
                            "on-primary-fixed": "#410001",
                            "background": "#f8f9fa",
                            "error": "#ba1a1a",
                            "surface-container": "#edeeef",
                            "surface-container-lowest": "#ffffff",
                            "on-tertiary-container": "#f5f7ff",
                            "on-secondary-fixed-variant": "#474746",
                            "surface-container-low": "#f3f4f5",
                            "secondary-fixed-dim": "#c8c6c5",
                            "tertiary-container": "#0071d4",
                            "inverse-primary": "#ffb4aa",
                            "primary-container": "#e30613",
                            "surface-variant": "#e1e3e4",
                            "tertiary": "#0059a8",
                            "error-container": "#ffdad6",
                            "secondary-fixed": "#e5e2e1",
                            "surface-bright": "#f8f9fa",
                            "on-surface-variant": "#5e3f3b",
                            "tertiary-fixed": "#d5e3ff",
                            "primary": "#b5000b",
                            "surface-dim": "#d9dadb",
                            "on-tertiary-fixed-variant": "#004788",
                            "outline-variant": "#e9bcb6",
                            "primary-fixed-dim": "#ffb4aa",
                            "primary-fixed": "#ffdad5",
                            "on-tertiary-fixed": "#001b3c",
                            "surface-tint": "#c0000c"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.125rem",
                            "lg": "0.25rem",
                            "xl": "0.5rem",
                            "full": "0.75rem"
                        },
                        "spacing": {
                            "gutter": "24px",
                            "margin-desktop": "64px",
                            "base": "8px",
                            "margin-mobile": "16px",
                            "lg": "48px",
                            "sm": "12px",
                            "xs": "4px",
                            "md": "24px",
                            "xl": "80px"
                        },
                        "fontFamily": {
                            "body-md": ["Inter"],
                            "display-lg-mobile": ["Hanken Grotesk"],
                            "headline-md": ["Hanken Grotesk"],
                            "label-sm": ["JetBrains Mono"],
                            "display-lg": ["Hanken Grotesk"],
                            "body-lg": ["Inter"]
                        },
                        "fontSize": {
                            "body-md": ["16px", {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                            }],
                            "display-lg-mobile": ["32px", {
                                "lineHeight": "40px",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "700"
                            }],
                            "headline-md": ["24px", {
                                "lineHeight": "32px",
                                "fontWeight": "600"
                            }],
                            "label-sm": ["12px", {
                                "lineHeight": "16px",
                                "fontWeight": "500"
                            }],
                            "display-lg": ["48px", {
                                "lineHeight": "56px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                            }],
                            "body-lg": ["18px", {
                                "lineHeight": "28px",
                                "fontWeight": "400"
                            }]
                        }
                    },
                },
            }
        </script>
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }

            .bento-grid {
                display: grid;
                grid-template-columns: repeat(12, 1fr);
                gap: 24px;
            }

            .hero-mask {
                clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);
            }
        </style>
    </head>

    <body class="bg-surface text-on-surface font-body-md selection:bg-primary selection:text-white overflow-x-hidden">
        <main class="pt-20">
            <!-- Hero Section -->
            <section class="relative h-[716px] flex items-center bg-inverse-surface overflow-hidden">
                <div class="absolute inset-0 opacity-40">
                    <img class="w-full h-full object-cover" data-alt="A high-performance luxury sports car parked in a pristine, minimalist white architectural space with dramatic sharp shadows and bright natural light. The vehicle's metallic finish reflects the clinical precision of the showroom environment. The overall mood is one of quiet power and elite engineering excellence, dominated by a palette of cool greys and striking blacks." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfx3Qro52zeFvNGs7x_svL2NAc2ur_mT2azSnCYekeGvArF99aG2XcIQPEJfzD0db7gQ8N1MKqz-e5i6XzWOwF82RaYbdG2rEMQFTp2tDHKjqfVyb4XabD6EUrfrjLtrqK8laKeD65dOtgPrNm8dbRyTlJqcyxgdd_t9H35fHWwg_GgiTmQd0aqTFyH8FDatoZZ3mItyS9wf44I-J1G-163lVA5ZHOYuzxc8x1kiBkSA5zqmZveOTc0oPu9SKb2Vf1Qp__4GJdh114" />
                </div>
                <div class="max-w-[1280px] mx-auto px-gutter w-full relative z-10">
                    <div class="max-w-2xl">
                        <span class="font-label-sm text-label-sm text-primary uppercase tracking-[0.2em] mb-md block">Legacy of Excellence</span>
                        <h1 class="font-display-lg text-display-lg text-on-primary mb-md leading-none">Redefining Automotive Engineering Since 1994.</h1>
                        <p class="font-body-lg text-body-lg text-surface-container-highest max-w-lg">
                            Elite Wheels is more than a dealership. We are the custodians of automotive performance, dedicated to the most discerning enthusiasts globally.
                        </p>
                    </div>
                </div>
                <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
                    <span class="material-symbols-outlined text-on-primary">expand_more</span>
                </div>
            </section>
            <!-- History & Legacy (Asymmetric Layout) -->
            <section class="py-xl bg-surface">
                <div class="max-w-[1280px] mx-auto px-gutter">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-lg items-center">
                        <div class="md:col-span-5 space-y-md">
                            <h2 class="font-headline-md text-headline-md text-on-surface">Precision in Every Mile.</h2>
                            <div class="h-1 w-20 bg-primary"></div>
                            <p class="font-body-md text-body-md text-secondary leading-relaxed">
                                Founded in the heart of the automotive industry, Elite Wheels began as a specialized engineering consultancy. Our transition into the world's most exclusive retail environment was driven by a single vision: to bridge the gap between track-ready performance and road-legal luxury.
                            </p>
                            <p class="font-body-md text-body-md text-secondary leading-relaxed">
                                Today, we stand as the definitive destination for high-performance vehicles, offering a curated selection of engineering marvels that represent the pinnacle of mechanical achievement.
                            </p>
                            <div class="pt-md grid grid-cols-2 gap-md">
                                <div>
                                    <span class="font-display-lg text-headline-md block text-primary font-bold">30+</span>
                                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Years Experience</span>
                                </div>
                                <div>
                                    <span class="font-display-lg text-headline-md block text-primary font-bold">1.2k</span>
                                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Curated Sales</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-7 relative">
                            <div class="aspect-[4/3] bg-surface-container rounded-lg overflow-hidden border border-outline-variant/10">
                                <img class="w-full h-full object-cover" data-alt="Detailed close-up of a high-end supercar engine and carbon fiber chassis in a brightly lit, sterile technical workshop. The lighting is crisp and cool-toned, highlighting the metallic textures and precision components. The background is a clean white professional garage that feels like a laboratory. The aesthetic is strictly modern and technical." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDY3liI6As0xSgASr7Lyw31CqhKiv-t_JtYVunOC4AE2u7QDG_0axeyk9zOIYV4OrycOdYLICE0w9nRmESJqbcNJpUcsPpGkGEOyb2vZwTP6GfKKetXK2PeaK0VvcpswwxanzhUolIdz0W-gG9OoWGEPOnJz7vmzKRVz3nHTr9X-yDvuJSUs8wKc7FMyDh293by_24uYT_ApL_E5-Od8HqNdXJrS0g57X_-BaXrOZddnyx5PVfuu012QI89J-6J58UmyGkAE-LuBqXx" />
                            </div>
                            <div class="absolute -bottom-10 -left-10 hidden lg:block w-64 aspect-square border-8 border-surface bg-primary p-md flex flex-col justify-end">
                                <span class="material-symbols-outlined text-white text-5xl mb-xs">verified</span>
                                <p class="text-white font-label-sm text-label-sm font-bold uppercase tracking-widest">Certified Performance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team & Consultants (Bento Grid Style) -->
            <section class="py-xl bg-surface-container-low">
                <div class="max-w-[1280px] mx-auto px-gutter">
                    <div class="text-center mb-xl">
                        <h2 class="font-headline-md text-headline-md mb-xs">Expert Consultation</h2>
                        <p class="font-body-md text-body-md text-secondary">The technical minds behind your next acquisition.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-md">
                        <!-- Head of Sales -->
                        <div class="md:col-span-2 group relative overflow-hidden bg-white border border-outline-variant/20 rounded-lg">
                            <div class="aspect-video overflow-hidden">
                                <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="Portrait of a professional automotive executive in a sharp, tailored black suit standing in front of a sleek glass-walled office. The lighting is cinematic with high contrast, projecting authority and technical expertise. The color palette is muted with deep blacks, crisp whites, and a single red tie accent to align with the brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFZQuqtZcsKFTJ7Om71-_7V3IACznDIZ90j7Kqx6WTpi7n3IQG7adsakA6RyKEskVwXYclP0YaCr0VRVDsuI5ABhkMh-h-VBA4TBCNMEmDIhLHCsq-n3Y4Yr9m9j32s3VUGgXQvp8-Y8IHUkGPDyxv1dylRjIsbuCJc3YzJywTQGnXLM6md6f9mQo2tZdS0ruVd2bvx_em0ASE9_z2ryzvH0e2HQnKsuJs6OZKtqaQumeb2jEd5HSLN8zjl1-USqlROKpQWObDrnV6" />
                            </div>
                            <div class="p-md">
                                <span class="font-label-sm text-label-sm text-primary uppercase">Executive Board</span>
                                <h3 class="font-headline-md text-headline-md mt-xs">Marcus Van Der Braak</h3>
                                <p class="text-secondary font-body-md">Chief Acquisition Officer</p>
                            </div>
                        </div>
                        <!-- Team Member 1 -->
                        <div class="group relative overflow-hidden bg-white border border-outline-variant/20 rounded-lg">
                            <div class="aspect-square overflow-hidden">
                                <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="A male technical automotive consultant looking thoughtfully into the distance, wearing a modern professional polo shirt with a subtle logo. The background is a soft-focus high-end showroom with blurred red accents from car lights. The atmosphere is professional, reliable, and sophisticated." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_X3XRjwGEk2yfepKZojL_cN3IeCaIjDeR2ux55hkl1gEpbAbRjFDWlt3Bcdtt6HDUVpUDQGlY_2JJHPE0kn8wHI1JrE9BpW1O9BU9tb5ZM879_VK2XDfq8cq7NNLkVya1080GRY8CF90L4BvdrAu_r6edl5kZ1H8gOl7KtMaKbQNfWpr4YqdGeSbcrLp5BOQNfwMVARh1W8ijxIee0dtBMIayX069pgfxH_VQzsZS-toVX3EJJJGSQweX369dSXIgy-X_9W0yXGu-" />
                            </div>
                            <div class="p-md">
                                <h4 class="font-label-sm text-label-sm font-bold">David Chen</h4>
                                <p class="text-secondary text-[10px] uppercase tracking-tighter">Performance Specialist</p>
                            </div>
                        </div>
                        <!-- Team Member 2 -->
                        <div class="group relative overflow-hidden bg-white border border-outline-variant/20 rounded-lg">
                            <div class="aspect-square overflow-hidden">
                                <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="A professional female finance consultant in a minimalist white office setting. She is wearing a grey tailored blazer and has a confident, welcoming expression. The lighting is bright and airy, symbolizing transparency and trust. The overall look is modern and high-end corporate." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGmFBPx_00C1rj9Wk6RAC9QpoKxUQuTi91oYt0D0MuvJ_npFhvj_F0HK2nji4DNk35tcfBZh4LtSGNkv_j1BYGfKdaHJln_B7PpOqcTpe-1vVhRiYpeCzQd79nSkb9Xm9G3-UBJ03yNzHiTk0x01mSb-0pPXf4gjtnbwQ3evcCTGKu0IknPsRWLN0gkWlmUCDg1k6Tk2shf3nKWLJdqmq0FeFaMT6fYw706t1RmI0kli_Gbc2TkEmmU5h4-IZnBW_SI55gMljOyLik" />
                            </div>
                            <div class="p-md">
                                <h4 class="font-label-sm text-label-sm font-bold">Elena Rossi</h4>
                                <p class="text-secondary text-[10px] uppercase tracking-tighter">Financing Lead</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Showroom Gallery (Grid) -->
            <section class="py-xl bg-white">
                <div class="max-w-[1280px] mx-auto px-gutter">
                    <div class="flex flex-col md:flex-row justify-between items-end mb-xl gap-md">
                        <div class="max-w-xl">
                            <h2 class="font-headline-md text-headline-md mb-xs">The Showroom.</h2>
                            <p class="font-body-md text-body-md text-secondary">A space engineered to showcase the absolute peak of automotive design.</p>
                        </div>
                        <button class="flex items-center gap-xs font-label-sm text-label-sm text-primary font-bold group">
                            VIEW VIRTUAL TOUR
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-md">
                        <div class="col-span-2 row-span-2 group relative overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" data-alt="Wide angle shot of a massive, ultra-modern automotive showroom with white polished floors that reflect the bright overhead LED panel lighting. Several exotic cars are arranged as art pieces. The architecture is sharp and angular, with glass walls looking out onto a modern cityscape at dusk. The palette is dominated by whites, grays, and the vibrant red glow of taillights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx5gvdeLBwGgYWDytxS81d1xvqiCdetcP2SjS8BCy3z2Da09eQbbBgl576eyG_f7Ca00_TaMq9Rz9PXFd2klig6GvG5aOouRiUUxhwjyEQ7in-z2hKNiY3vM2e-RCI-C8hXzIPdNoYRFHIx2frukv1pnx4Yl-GnfgBphhrUBAqf6IeH4zpHWykVcJhvIRgKE0QKrvZtZ9wYqhOX83gy5kxQZW8LvNXaCG4WGLdYoE6VXFPY_eYozxBqAEOZGIYzPTjzRMD8xKLaCzx" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-md">
                                <p class="text-white font-label-sm text-label-sm">Main Exhibit Hall</p>
                            </div>
                        </div>
                        <div class="aspect-square group relative overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" data-alt="Interior shot of a luxury car's leather seating and dashboard, showcasing intricate red stitching against high-quality black leather. The focus is sharp, highlighting the premium craftsmanship and tactile quality. The lighting is focused and warm, creating a sense of intimate luxury and high-end engineering detail." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDf2qVgTaQ8vxo1iommVcuIf-XzkdajU_dTjzTImv9pYyZMCqQaQmH3GIValZ0Zkq6Gnj-0a7lFaeTN-4C6I3mog-XMnpR4tdhOfAlaaKz8KV_rAo8QyL2-6t5ZGndfP0G0XMJba3DduN-9Gc0CeSvTkjzEUoRMmnUsswJy4OPZnzL-alqZ1kvmKnlUTHi1qRg_LL7jkm4Awy_h6rvOR-TOf6aDA022u-t-Eh3PNNw-U20ixb6wB7NnJVHjHafxnnSbYNzIqiTjvEgj" />
                        </div>
                        <div class="aspect-square group relative overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" data-alt="A sleek black sports car silhouette captured against a bright, clinical white background. The car's lines are illuminated by a single overhead rim light, emphasizing its aerodynamic form. This minimalist composition reflects the brand's focus on precision and modern aesthetics." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRWVqJULRohtmRj35G7mU6d59M9dxpBNnBgszTQTb7ImeG9ubgJ0yXNeb7WtLINqPZoe8xl5VcvMoIyZmsGoWZAO_l0VwRJMh49PTuTkMtJ4sjITOtS0uehHzl0uGdaobmRjmUOYyTbJjFlZkNo1fF7tg25YtreT1tqdlJ4-7cZk_569BGcE-k57VRXVoTnuJ2yTA6xMueudBx1LGK55MAFkcGroFjkjILKAerhj1M2w3yUVim9KW6jitsAnw05p7cnScqcc0iACnh" />
                        </div>
                        <div class="col-span-2 aspect-[2/1] group relative overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" data-alt="An expansive view of a professional service bay at the Elite Wheels facility. The floors are a spotless light grey epoxy, and tools are neatly organized on minimalist matte black racks. A red supercar is elevated on a lift, being attended to by technicians in clean uniforms. The lighting is bright, shadowless, and professional, suggesting technical perfection." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL3NPf3zcQ0LimYOewxY4--isqafUN6hSbrZvkbRHBZ2pKgHMZRKNArg8vnFcSBrNjLJ68zoH_dX9gk_WyL6YQ8q7cD0-Tb1_ZA9iVbmnt_IuXLTwyNvlLmXgHU07bQOEMBBlNj9Mri_P18htikWUCdP5VQWRqzo7MmXsHXkkb2IK_JtCzwIKIB4u6o3hGNdbgg1uWH-gd8Oqu4BV_NmnFOxsUO9eCDChTMCdkBiK2wiW1h5xX6mKP_OhEMoQU4gNg8lJtkslQcEwG" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-md">
                                <p class="text-white font-label-sm text-label-sm">Master Service Bay</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to Action -->
            <section class="py-xl bg-inverse-surface text-center">
                <div class="max-w-2xl mx-auto px-gutter">
                    <h2 class="font-display-lg text-display-lg text-on-primary mb-md">Ready for the Next Chapter?</h2>
                    <div class="flex flex-col md:flex-row gap-md justify-center">
                        <button class="px-xl py-md bg-primary text-white font-label-sm text-label-sm rounded-lg hover:bg-on-primary-fixed-variant transition-all active:scale-95">
                            Schedule Consultation
                        </button>
                        <button class="px-xl py-md border border-outline text-white font-label-sm text-label-sm rounded-lg hover:bg-white/10 transition-all active:scale-95">
                            Explore Inventory
                        </button>
                    </div>
                </div>
            </section>
        </main>
        <script>
            // Micro-interactions and scroll effects
            document.addEventListener('DOMContentLoaded', () => {
                const observerOptions = {
                    threshold: 0.1
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('opacity-100', 'translate-y-0');
                            entry.target.classList.remove('opacity-0', 'translate-y-10');
                        }
                    });
                }, observerOptions);

                // Animate on scroll for sections
                document.querySelectorAll('section').forEach(section => {
                    section.classList.add('transition-all', 'duration-1000', 'ease-out');
                });
            });

            // Sticky header color change on scroll
            window.addEventListener('scroll', () => {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.classList.add('shadow-sm', 'bg-white/95', 'backdrop-blur-md');
                } else {
                    header.classList.remove('shadow-sm', 'bg-white/95', 'backdrop-blur-md');
                }
            });
        </script>
    </body>

    </html>
</div>
@endsection