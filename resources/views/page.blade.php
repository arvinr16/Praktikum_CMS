@extends('layouts.front')
@section('content')
<main class="relative z-10 pt-20">
    <!-- Hero Section -->
    <section
        class="relative h-[921px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-gradient-to-b from-transparent via-surface-dim/50 to-surface-dim z-10"></div>
            <img
                class="w-full h-full object-cover opacity-50"
                data-alt="A cinematic low-angle shot of a high-end, dark gray luxury vehicle parked inside a sleek, modern architectural garage. The lighting is dramatic and technical, with cool blue and sharp red neon accents reflecting off the polished concrete floor and the car's metallic surface."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAF9oH-Sc0ABhNrfAgPuCvpCCfrvydvAkdeVEznuVNEeeEi2fCWam-iXY7sK6oQRk_yu5dwpZvdUZmstRuI_pAf63I2SFwXddV7a2kSPYc_YjEmICw1ss5mKZFtR7IZh8ZdsRNOtruFeEGlCNnO1x2BRiZDDKTOYJrs4zfuRtcGeeOfkveAOqK55VauVZt4SCePz6LCdn1bPrz_N8k53lvdLZ15BWFTijp48NSKceAu0qzE3GVFHgN-TmdM8gtbeS4PH1E836ZU7ge5" />
        </div>
        <div
            class="relative z-20 px-margin-desktop max-w-container-max w-full text-center">
            <div
                class="inline-block px-4 py-1 bg-surface-container-high border border-outline-variant/30 text-label-sm font-label-sm uppercase tracking-[0.3em] mb-6 text-primary">
                Est. 1999
            </div>
            <h1
                class="font-display-lg text-display-lg text-white mb-6 text-glow leading-none">
                THE APEX OF<br /><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-metallic-start to-primary">AUTOMOTIVE LEGACY</span>
            </h1>
            <p
                class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-10">
                Redefining luxury through precision engineering and an unwavering
                commitment to the Indonesian automotive landscape for over two
                decades.
            </p>
            <div class="flex justify-center gap-6">
                <button
                    class="metallic-cta px-10 py-4 text-on-surface font-bold uppercase tracking-widest text-label-sm rounded-lg hover:scale-105 transition-all duration-300">
                    Our Heritage
                </button>
                <button
                    class="border border-outline px-10 py-4 text-primary font-bold uppercase tracking-widest text-label-sm rounded-lg hover:bg-white/5 transition-all duration-300">
                    The Collection
                </button>
            </div>
        </div>
    </section>
    <!-- History Bento Grid -->
    <section
        class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
        <div class="grid grid-cols-12 gap-gutter">
            <div class="col-span-12 md:col-span-8 space-y-gutter">
                <div
                    class="tilt-card glass-panel p-10 rounded-xl sheen-effect relative overflow-hidden group">
                    <span
                        class="font-label-sm text-label-sm text-metallic-start tracking-widest uppercase mb-4 block">Our Origin</span>
                    <h2 class="font-headline-xl text-headline-xl text-white mb-6">
                        Since 1999, Aurum Motors has been the cornerstone of luxury
                        mobility in Jakarta.
                    </h2>
                    <p
                        class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
                        Starting as a specialized boutique for discerning collectors, we
                        have grown into Indonesia's premier destination for
                        high-performance Japanese automotive excellence. Our journey is
                        defined by a singular obsession: the perfect synergy between
                        machine and driver.
                    </p>
                    <div
                        class="grid grid-cols-2 gap-8 pt-8 border-t border-outline-variant/20">
                        <div>
                            <div
                                class="text-display-lg text-metallic-start font-bold leading-none mb-2">
                                25+
                            </div>
                            <div
                                class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">
                                Years Excellence
                            </div>
                        </div>
                        <div>
                            <div
                                class="text-display-lg text-white font-bold leading-none mb-2">
                                15k+
                            </div>
                            <div
                                class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">
                                Vehicles Delivered
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4">
                <div
                    class="tilt-card h-full glass-panel overflow-hidden rounded-xl border border-outline-variant/30 flex flex-col">
                    <img
                        class="h-64 w-full object-cover"
                        data-alt="A vintage 1990s luxury Japanese sports car"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd1rRbjNsG3xbkzf6fpXwQPGJMpXykaa0DhgOGXTgL1Pcbn_uwfthg20CEK6IOb6jJ0JPT4jt2dnlXh2liQNLzTQcMaixhKHzsbIiJL8Zqh4m27ikYAqtGmcPaxs7XqMTOBMPL0sXdpJp-PSjxGPCvIbf-NMbVc3AqoC5CGHcZecyyQdQ_lGM5Lad-lkwUEfQu6wn3gXfCnAet-7nlhiNxLwwfspbuh8R7WuapVmyuEjGxq-duDE1-sT_7IDrvN1ixyWeOhHJsCrAU" />
                    <div class="p-8 flex-grow flex flex-col justify-center">
                        <h3 class="font-headline-md text-headline-md text-white mb-4">
                            The Mission
                        </h3>
                        <p class="text-on-surface-variant">
                            To curate the finest selections from Honda, Toyota, Daihatsu,
                            and Mitsubishi, ensuring every vehicle meets the "Aurum
                            Standard" of mechanical perfection.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Strategic Vision Section -->
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div
                    class="tilt-card glass-panel p-8 rounded-xl h-full flex flex-col justify-between hover:border-metallic-start/30 transition-all duration-500 group">
                    <div>
                        <span
                            class="material-symbols-outlined text-metallic-start text-4xl mb-6">workspace_premium</span>
                        <h4 class="font-headline-md text-headline-md text-white mb-4">
                            Premium Standards
                        </h4>
                        <p class="text-on-surface-variant">
                            We don't just sell cars; we provide an entry into a lifestyle
                            of stealth wealth and unrivaled reliability.
                        </p>
                    </div>
                    <div
                        class="pt-6 flex items-center text-primary font-bold text-label-sm uppercase tracking-widest gap-2 group-hover:gap-4 transition-all">
                        View Standards
                        <span class="material-symbols-outlined">trending_flat</span>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-8">
                <div
                    class="tilt-card relative rounded-xl overflow-hidden h-full group border border-outline-variant/30">
                    <img
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A panoramic view of a luxurious car showroom"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDi_G_hU6z9gXP3DfGihe9Ixu9rL7iZAzrdmWNEtWS7eetPbGKpy4vtyBTdKHAbrQCXsBcToWRQIOY1nvCSCB0tQ3K2z9Upa9RT-rnglcIkV4Va0Yxx8zIflY3Sz-qLPWXF15SxuS95tu85jOpFfJeYQgwtWCuPHeOkRBZnU4CPfLx_OY2g_YpiTNRGBRbAnMos33cnXBlaGp3fmFmU_aCuSGhS-vPfmqc41Pprsa-0t8UHjc_VcMAWZZ2jzlzKdOD1rZ6S6E9fNQwU" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-surface-dim via-transparent to-transparent p-10 flex flex-col justify-end">
                        <h4 class="font-headline-xl text-headline-xl text-white">
                            THE JAKARTA FLAGSHIP
                        </h4>
                        <p class="text-on-surface-variant max-w-md">
                            Our showroom in the heart of Sudirman is a temple to
                            automotive engineering.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technicians Section -->
    <section
        class="bg-surface-container-low/50 py-section-gap relative overflow-hidden">
        <div
            class="px-margin-desktop max-w-container-max mx-auto relative z-10">
            <div
                class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <span
                        class="font-label-sm text-label-sm text-metallic-start tracking-widest uppercase mb-4 block">The Hands of Excellence</span>
                    <h2 class="font-headline-xl text-headline-xl text-white">
                        MASTER TECHNICIANS &amp; PRECISION SERVICE
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-4">
                        Every vehicle at Aurum Motors undergoes a rigorous 300-point
                        inspection by our specialized technicians, trained directly by
                        manufacturers to maintain the highest levels of performance.
                    </p>
                </div>
                <button
                    class="border border-outline px-8 py-3 text-primary font-bold uppercase tracking-widest text-label-sm rounded-lg hover:bg-white/5 transition-all duration-300">
                    Book Service
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <div
                    class="tilt-card group bg-surface-container-high rounded-xl p-8 border border-outline-variant/20 transition-all">
                    <div
                        class="w-16 h-16 rounded-full bg-surface-container-highest flex items-center justify-center mb-6 group-hover:bg-metallic-start transition-colors">
                        <span class="material-symbols-outlined text-white text-2xl">precision_manufacturing</span>
                    </div>
                    <h5 class="font-headline-md text-headline-md text-white mb-2">
                        OEM Certified
                    </h5>
                    <p class="text-on-surface-variant">
                        Specialized training from Honda and Toyota Japan ensure your
                        vehicle operates at peak efficiency.
                    </p>
                </div>
                <div
                    class="tilt-card group bg-surface-container-high rounded-xl p-8 border border-outline-variant/20 transition-all">
                    <div
                        class="w-16 h-16 rounded-full bg-surface-container-highest flex items-center justify-center mb-6 group-hover:bg-metallic-start transition-colors">
                        <span class="material-symbols-outlined text-white text-2xl">settings_input_component</span>
                    </div>
                    <h5 class="font-headline-md text-headline-md text-white mb-2">
                        Genuine Parts
                    </h5>
                    <p class="text-on-surface-variant">
                        We exclusively use authentic Mitsubishi and Daihatsu components
                        to preserve vehicle integrity.
                    </p>
                </div>
                <div
                    class="tilt-card group bg-surface-container-high rounded-xl p-8 border border-outline-variant/20 transition-all">
                    <div
                        class="w-16 h-16 rounded-full bg-surface-container-highest flex items-center justify-center mb-6 group-hover:bg-metallic-start transition-colors">
                        <span class="material-symbols-outlined text-white text-2xl">query_stats</span>
                    </div>
                    <h5 class="font-headline-md text-headline-md text-white mb-2">
                        Advanced Diagnostics
                    </h5>
                    <p class="text-on-surface-variant">
                        Utilizing proprietary cloud-based diagnostic tools to predict
                        maintenance needs before they arise.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section -->
    <section class="py-section-gap">
        <div
            class="px-margin-desktop max-w-container-max mx-auto text-center mb-16">
            <h2 class="font-headline-xl text-headline-xl text-white">
                THE GALLERY
            </h2>
            <p class="text-on-surface-variant mt-4">
                A visual journey through our Jakarta and Surabaya showrooms.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            <div class="aspect-square overflow-hidden group cursor-pointer">
                <img
                    class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-110"
                    data-alt="Engine bay close-up"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoLh3emVc9luToW3UNrbNm-ZBH4dgYAP_xsDSuKpeEwmGpD-l3JykYHrGkcIXEcS15xiJCalbnP4kV42KG22bk_78sj1DhJ6szA6UdT3x0wvQZ-klm3tIgq7jmTjkCJroDdK-lyQRM5GZfuTqTF4To3jsLe8hiuNUdVdnUZw2CW6t9vB6iLRQPWzvMF5wzXzTzV5R_D8emu6QWgcVTSXizT3-6_UBkJAZVW0xdNLu0dcS9PPjtrD_gUMv-1f-IXmDnb1TUWmtXyxww" />
            </div>
            <div class="aspect-square overflow-hidden group cursor-pointer">
                <img
                    class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-110"
                    data-alt="Luxury SUV profile"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7mFS5s_cxx3Zk9rk-jNAbK03EdNmIr4tKUo8nezeYSbCATE1WcbFlwXf-8KWw3SbaHL85dFtA8otgaBKlHg8CX2Asc0m3TVcUBSOpcjuaFfs2_vZXof1ihscYc4r1rG2on6nZGnHoi8vIrHuJ7bw332pcU6y3p6tCR4RLSY7r6l-2tBmASW6T5ORTKkaW6jse3WsN4q2g6qnQMl3tpqpO3UkJdyaajuKmdajsLe37qdg8GQIQc5pfBlfgSlzzfm2TDCokXpzuTLj2" />
            </div>
            <div class="aspect-square overflow-hidden group cursor-pointer">
                <img
                    class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-110"
                    data-alt="Showroom lounge"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpRpzS7CuNbG9u1SPAbaITluXJwik7K6m3U12jodNtwl3lM2kMCqeboAEAeS87nH4Mg241q3K2bGUb0aYSotkNNjuNhPxhyDJKkJsljjzsyy_UnY0FeqCei_Ath6Zwl3hg43sA38wTS6wuTyS6LRz0tQDG88rdNJElurLaB4-Pe92917j7u4kkTMQWn66LeFXkpcVexXAQPjhjKUP7xIJcEABfA1tN_RK2VNLqC_DDZ7ztPWvNUWYrEJhXLIfAmSLl6Umls-bO_fCL" />
            </div>
            <div class="aspect-square overflow-hidden group cursor-pointer">
                <img
                    class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-110"
                    data-alt="Digital dashboard"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLp2Xo3a_homp_pOtOCn2Nh36F8R8Mn90FoSJ9eP9UEKXsGa-ckRrZczQl658guvaD_TbdkjProZvtgJiRKY35dHnVzeq4LDIkxJkBm-uTNaw1REoPMql6V5jtTkHF6EkD4xx4ez7MMbQ5oJLBDzlLApk3QJEqm-UQv-JaazFwPVgWfDgp0v-RlM-W8rzgSdFmjo5lVYBSIJr4xYqGYw8SBPo8yVG6YPizLT2__lLXotwsd0Lw9lC5JMoF_0a4FbDVlleODWzP4GCV" />
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section
        class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
        <div
            class="bg-surface-container p-16 rounded-3xl border border-outline-variant/20 relative overflow-hidden text-center">
            <div
                class="absolute -top-24 -right-24 w-64 h-64 bg-metallic-start/10 rounded-full blur-[100px]"></div>
            <h2 class="font-headline-xl text-headline-xl text-white mb-6">
                READY TO EXPERIENCE AURUM?
            </h2>
            <p
                class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mx-auto mb-10">
                Join our exclusive circle of owners and experience the pinnacle of
                Indonesian automotive luxury.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <button
                    class="metallic-cta px-12 py-5 text-on-surface font-bold uppercase tracking-widest text-label-sm rounded-lg hover:scale-105 transition-all duration-300">
                    Book A Private Consultation
                </button>
                <button
                    class="border border-outline px-12 py-5 text-primary font-bold uppercase tracking-widest text-label-sm rounded-lg hover:bg-white/5 transition-all duration-300">
                    Contact Showroom
                </button>
            </div>
        </div>
    </section>
</main>
@endsection