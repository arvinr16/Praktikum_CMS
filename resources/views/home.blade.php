@extends('layouts.front')
@section('content')
<section
    class="relative min-h-screen flex items-center pt-20 px-margin-desktop overflow-hidden">
    <div
        class="max-w-container-max mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-gutter items-center z-10">
        <div>
            <div
                class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container-high border border-outline-variant rounded-full mb-6">
                <span
                    class="w-2 h-2 rounded-full bg-metallic-start animate-pulse"></span>
                <span
                    class="font-label-sm text-label-sm text-on-surface-variant uppercase">the choice of the elite 2026</span>
            </div>
            <h1
                class="font-display-lg text-display-lg mb-4 text-primary leading-tight">
                Passion<br /><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-outline">Excellence.</span>
            </h1>
            <p
                class="font-body-lg text-body-lg text-on-surface-variant max-w-lg mb-10">
                Experience the pinnacle of Japanese and international automotive
                craft. Curated luxury vehicles for the discerning Indonesian
                collector.
            </p>
            <div class="flex gap-4">
                <a
                    href="{{ 'cars' }}"
                    class="metallic-cta px-10 py-4 font-label-sm text-label-sm uppercase tracking-widest text-on-surface font-bold">
                    Explore Collection
                </a>
                <a
                    href="{{ 'cars' }}"
                    class="px-10 py-4 border border-outline-variant hover:bg-white/5 transition-all font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">
                    Virtual Showroom
                </a>
            </div>
        </div>
        <div class="relative group">
            <div
                class="absolute -inset-4 bg-metallic-start/10 blur-3xl rounded-full opacity-50 group-hover:opacity-70 transition-opacity"></div>
            <img
                alt="Luxury MPV"
                class="relative z-10 w-xs drop-shadow-2xl tilt-card transform transition-transform duration-500 hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHrDbVBGZBZpapxQp6nSVGL9L2VvtGlONyDBW3FYzXYNIMSnfVB6KAHhKr6_nzFVrl8wJzRqeNDT29iw5DQzmDgtQ56XW44u71sa4GSfBjvpfXJ22VQWUNqikJMLg0W1Hxi2gOXHsctg_1TS4mHUQOpLZHv6i_6hlDV9jFAGKzMkO-9VVgy_59a5aoTRJNses0ZqfrCR4BlwqpniLXYeumsPoDjL8BSwypv7Pqh1T_cD50X89or4C2enf6xrQ-tA68znUcNzcdAhui" />
        </div>
    </div>
</section>
<!-- Bento Grid Featured Cars -->
<section
    class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-16">
        <div>
            <h2 class="font-headline-xl text-headline-xl text-primary mb-4">
                Featured Collection
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                Precision-selected models from Toyota, Honda, and Mitsubishi, ready
                for Indonesian roads.
            </p>
        </div>
        <a
            class="font-label-sm text-label-sm text-metallic-start flex items-center gap-2 hover:gap-4 transition-all"
            href="#">
            VIEW ALL MODELS
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>
    <div
        class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-gutter h-auto md:h-[800px]">
        <!-- Main Bento Item -->
        <div
            class="md:col-span-2 md:row-span-2 relative group overflow-hidden glass-panel rounded-xl tilt-card p-8 flex flex-col justify-end">
            <img
                alt="Toyota Alphard"
                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuARRDmowz9b4TgcleSOuhr26MKU500fFQFPAQrHVb_yP7HJg_D9aVe5RCs2w4ZxtG3Nhe4XRMJgUk4RdXVix-eBT_AOlSFnWduq9ljRplNYgJHOaG5V9Yt-WAv45TBTDLEeycoh2eqpqn0bhR-A-qeM5KoMxI_I8QErfyZ9lIhf8wSjtNYFejS2Q49cfzNjTYBuvRnb6JpUP-y2YjRcKVCuyxrovFUABFsdubLQIEFAXjYXTLdf4waRofCMP52P7GMkjd7rt7Zqm1-H" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-surface-dim via-transparent to-transparent opacity-80"></div>
            <div class="relative z-10">
                <span
                    class="font-label-sm text-label-sm bg-surface-container-high px-3 py-1 mb-4 inline-block">LUXURY MPV</span>
                <h3 class="font-headline-md text-headline-md text-primary mb-2">
                    Toyota Alphard HEV
                </h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-6">
                    The ultimate symbol of prestige and comfort for the Indonesian
                    elite.
                </p>
                <button
                    class="px-6 py-2 border border-primary/20 hover:bg-primary hover:text-surface-dim transition-all font-label-sm text-label-sm uppercase">
                    Specifications
                </button>
            </div>
        </div>
        <!-- Bento Top Right -->
        <div
            class="md:col-span-2 relative group overflow-hidden glass-panel rounded-xl tilt-card p-8 flex flex-col justify-end">
            <img
                alt="Honda Civic RS"
                class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-110 transition-transform duration-700"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuox75RKd9FwW-zVG3G6hTc0A63Vvy94geJ0Ejw5Kxv5SJZa1ATI0jNKEZ9kq-Z1fKoKgxYfZ7PHEmPwtlL9lBW9kW9vjOaBa7D8G7hFHbDtHkb_kNx_R_QQJt2Y33e03cFO8hsqLoSLtQ-CeJpXyio6bVu6pHy56flDtRBimlTc_TUqV-2frTnnTcbS3bXI7ioNElV-GPr531tQJ5SpCaCJ-UFyH1CahFuh9B9QIkOoP5X4HE4X3GRTGAF9G0_IgEQRyaF3aWEXVS" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-surface-dim to-transparent"></div>
            <div class="relative z-10">
                <span
                    class="font-label-sm text-label-sm bg-surface-container-high px-3 py-1 mb-2 inline-block">PERFORMANCE SEDAN</span>
                <h3 class="font-headline-md text-headline-md text-primary">
                    Honda Civic RS
                </h3>
            </div>
        </div>
        <!-- Bento Bottom Right 1 -->
        <div
            class="relative group overflow-hidden glass-panel rounded-xl tilt-card p-6 flex flex-col justify-end">
            <img
                alt="Mitsubishi Pajero"
                class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:scale-110 transition-transform duration-700"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3AhBDcLohihGw5oD_6ozjDPaaDFdI3SVtSdw5u0Ko-Fdrp2p4HBVRxY9DjNlTuiWCzbIDZXvVtdAYZuDK_yXclehTcHoHAGDwft7iIWQp5POXrJRwxaciWp4oq2nVv_Oc2I7j9obHurea36OY2ZM02hh_3Yu3EBJ9cuOVd99VHwpEvZxsA5cbGFZPv2yjJV65yqYc-4EC9mdu93kaS7Pl7KBEk3frt4AOvDhOSgSfepKhOgtUDaSXAzasgygWQ9HVfiFPNPQnD48y" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-surface-dim to-transparent"></div>
            <div class="relative z-10">
                <span class="font-label-sm text-label-sm text-on-surface-variant">4x4 DIESEL</span>
                <h4 class="font-body-lg text-body-lg font-bold text-primary">
                    Pajero Sport Dakar
                </h4>
            </div>
        </div>
        <!-- Bento Bottom Right 2 -->
        <div
            class="relative group overflow-hidden glass-panel rounded-xl tilt-card p-6 flex flex-col justify-end">
            <div
                class="absolute inset-0 bg-surface-container-high flex items-center justify-center">
                <span
                    class="material-symbols-outlined text-6xl text-outline-variant group-hover:text-metallic-start transition-colors">add_circle</span>
            </div>
            <div class="relative z-10">
                <h4 class="font-body-lg text-body-lg font-bold text-primary">
                    Custom Order
                </h4>
                <p class="font-label-sm text-label-sm text-on-surface-variant">
                    Sourcing worldwide
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Showroom Experience -->
<section class="py-section-gap bg-surface-container-low overflow-hidden">
    <div
        class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
        <div class="order-2 md:order-1 relative">
            <div class="grid grid-cols-2 gap-4">
                <img
                    alt="Showroom Interior"
                    class="rounded-xl w-full h-80 object-cover tilt-card shadow-2xl"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5rDzzXZloK633XzrNd6rogFLLsIKI3pimEh1PguUGP5-a5ehkYOdX76b_WuPt2wumgjKdOT8fTz-twSoV2qKdh01uKu51W5MTFDfSUvS4qUB_41Z6Fd5EpO1vIu_MgRPAWrocc96AmuraWcQZaHbvs9P_guJgLGP_4GvSPITxnwn4VRUjymcBtlHwNBc-YCIWQjEGhSYZZzWaU4yg0JBOPbacHwgYnOe53tWwJEdywU1qXVtMQGNRi6dU1iv6jlbR8rtjZLoZ_qQH" />
                <img
                    alt="Concierge Service"
                    class="rounded-xl w-full h-80 object-cover translate-y-12 tilt-card shadow-2xl"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZPl3GQisCDXBtrM1b3HNgj_RgJfffpC1zYd_pkltLMEorAvshnqWLoA_g8boFDBDQOGySnEPdw9RpG1jqVE2ZeQAyg_BWC7adMYoYkw2QmQ32q-x8gnuKWTjW4SiLz713faZpyOg6v_oP2EO8UzaBbt1QUsyzZfTSjvgRxoV9Vw7ee-tDnYhVteVnG2MCo3MxsiVl42Te4XeH14nui3A0qTE_0W-DdPMuvXiy7jbpHc0bQ0mjQnwciiXj-BuE1tneiKbvgJluNJP8" />
            </div>
        </div>
        <div class="order-1 md:order-2">
            <h2 class="font-headline-xl text-headline-xl text-primary mb-6">
                The Jakarta<br />Experience.
            </h2>
            <p
                class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
                Located in the heart of Sudirman, our showroom is more than a
                dealership. It's a sanctuary for automotive enthusiasts where
                technology meets hospitality.
            </p>
            <div class="space-y-6 mb-10">
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-surface-container-highest rounded-full border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">verified</span>
                    </div>
                    <div>
                        <h4 class="font-body-lg text-body-lg font-bold text-primary">
                            Certified Origins
                        </h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Every vehicle undergoes a 200-point rigorous technical
                            inspection.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-surface-container-highest rounded-full border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">auto_fix</span>
                    </div>
                    <div>
                        <h4 class="font-body-lg text-body-lg font-bold text-primary">
                            Elite Maintenance
                        </h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Specialized service bays with original parts and
                            Japanese-trained technicians.
                        </p>
                    </div>
                </div>
            </div>
            <button
                class="metallic-cta px-10 py-4 font-label-sm text-label-sm uppercase tracking-widest text-on-surface font-bold">
                Schedule a Visit
            </button>
        </div>
    </div>
</section>
<!-- Concierge Services -->
<section
    class="py-section-gap px-margin-desktop max-w-container-max mx-auto text-center">
    <div class="max-w-3xl mx-auto mb-16">
        <h2 class="font-headline-xl text-headline-xl text-primary mb-4">
            Concierge Services
        </h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant">
            Tailored financial solutions and lifetime maintenance for your peace
            of mind.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Service 1 -->
        <div
            class="glass-panel p-10 rounded-xl hover:border-metallic-start transition-all group tilt-card">
            <span
                class="material-symbols-outlined text-4xl text-metallic-start mb-6 block">payments</span>
            <h3 class="font-headline-md text-headline-md text-primary mb-4">
                Premium Financing
            </h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                Competitive low-interest rates with flexible tenor options through
                our top-tier Indonesian banking partners.
            </p>
            <ul
                class="text-left space-y-3 font-label-sm text-label-sm text-on-surface-variant mb-8">
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span>
                    Instant Approval
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span> 0%
                    Down Payment Options
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span>
                    Transparent Processing
                </li>
            </ul>
            <a
                class="font-label-sm text-label-sm text-primary group-hover:text-metallic-start transition-colors uppercase tracking-widest"
                href="#">Learn More</a>
        </div>
        <!-- Service 2 -->
        <div
            class="glass-panel p-10 rounded-xl hover:border-metallic-start transition-all group tilt-card">
            <span
                class="material-symbols-outlined text-4xl text-metallic-start mb-6 block">home_repair_service</span>
            <h3 class="font-headline-md text-headline-md text-primary mb-4">
                Elegance Care+
            </h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                Inclusive maintenance packages covering parts and labor for 3 years,
                including home pick-up and delivery service.
            </p>
            <ul
                class="text-left space-y-3 font-label-sm text-label-sm text-on-surface-variant mb-8">
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span> 24/7
                    Roadside Assistance
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span>
                    Genuine Spare Parts
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span>
                    Door-to-Door Service
                </li>
            </ul>
            <a
                class="font-label-sm text-label-sm text-primary group-hover:text-metallic-start transition-colors uppercase tracking-widest"
                href="#">Enroll Now</a>
        </div>
        <!-- Service 3 -->
        <div
            class="glass-panel p-10 rounded-xl hover:border-metallic-start transition-all group tilt-card">
            <span
                class="material-symbols-outlined text-4xl text-metallic-start mb-6 block">published_with_changes</span>
            <h3 class="font-headline-md text-headline-md text-primary mb-4">
                Trade-In Elite
            </h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                Hassle-free trade-in for your current vehicle with market-leading
                valuation and instant balance settlement.
            </p>
            <ul
                class="text-left space-y-3 font-label-sm text-label-sm text-on-surface-variant mb-8">
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span>
                    On-site Appraisal
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span> Best
                    Market Value
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check</span> Fast
                    Documentation
                </li>
            </ul>
            <a
                class="font-label-sm text-label-sm text-primary group-hover:text-metallic-start transition-colors uppercase tracking-widest"
                href="#">Get Valuation</a>
        </div>
    </div>
</section>
@endsection