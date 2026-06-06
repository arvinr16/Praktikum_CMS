@extends('layouts.front')
@section('content')
<main class="pt-32 pb-section-gap relative z-10">
    <!-- Hero Section -->
    <section class="px-margin-desktop max-w-container-max mx-auto mb-16">
        <div
            class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h1
                    class="font-display-lg text-display-lg uppercase italic tracking-tighter mb-4">
                    The <span class="text-metallic-start">Inventory</span>
                </h1>
                <p
                    class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Curated performance and unparalleled luxury. Explore our exclusive
                    collection of Jakarta's finest automotive engineering.
                </p>
            </div>
            <div class="flex items-center gap-4 text-label-sm font-label-sm">
                <span class="text-on-surface-variant">AVAILABLE UNITS:</span>
                <span class="text-primary text-headline-md font-bold">24</span>
            </div>
        </div>
    </section>
    <!-- Filters Section -->
    <section class="px-margin-desktop max-w-container-max mx-auto mb-12">
        <div
            class="flex flex-wrap items-center gap-6 p-6 glass-panel rounded-xl">
            <div class="flex flex-col gap-2">
                <span
                    class="font-label-sm text-label-sm text-outline uppercase tracking-widest">Brand Selection</span>
                <div class="flex flex-wrap gap-2">
                    <button
                        class="px-4 py-2 bg-primary text-on-primary font-bold rounded-lg text-label-sm transition-all duration-300">
                        All Brands
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        Honda
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        Toyota
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        Mitsubishi
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        Daihatsu
                    </button>
                </div>
            </div>
            <div class="h-12 w-[1px] bg-outline-variant/30 hidden md:block"></div>
            <div class="flex flex-col gap-2">
                <span
                    class="font-label-sm text-label-sm text-outline uppercase tracking-widest">Body Type</span>
                <div class="flex flex-wrap gap-2">
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        SUV
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        Sedan
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        MPV
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant rounded-lg text-label-sm transition-all duration-300">
                        Crossover
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Bento Grid Inventory -->
    <section class="px-margin-desktop max-w-container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <!-- Honda CR-V -->
            <div
                class="tilt-card group relative overflow-hidden bg-surface-container-low rounded-xl border border-outline-variant/20 h-full flex flex-col">
                <div class="relative h-64 overflow-hidden z-10">
                    <img
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A sleek, modern dark grey Honda CR-V parked in a high-end luxury showroom with reflective polished concrete floors. The lighting is dramatic, highlighting the aerodynamic curves and metallic finish of the SUV."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmuSo9MmkiXaVnqho8tM0sny0OcmAsBa2YwyhXwirGApr6t_HdDhW3rGgG84U30Om3XAOrFABtEuIbuoy2my4e2p38QqRsZaBIXUyTw3TkARMcaAf_zZIx9sfHukz00tA3cFUdnXTbriB_t3tsmIJnKBYzSa1_cUxjAMyK0F3zyURa9S8w2PjRXyEHVUQVeOG-QZJhk-wwNBSmdcWgmQ3TppdXNUERxMeulc1x6v2ulPyfFHQYWUPcs2gHX-gN6JWpOGrIIQzb6Cjt" />
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span
                            class="bg-surface-container-high/80 backdrop-blur-md px-3 py-1 text-label-sm font-label-sm uppercase rounded">New Arrival</span>
                        <span
                            class="bg-metallic-start px-3 py-1 text-label-sm font-label-sm text-white uppercase rounded">AWD</span>
                    </div>
                </div>
                <div
                    class="p-8 flex flex-col flex-grow tilt-card-inner relative z-10">
                    <div class="flex justify-between items-start mb-2">
                        <h3
                            class="font-headline-md text-headline-md tracking-tight uppercase">
                            Honda CR-V
                        </h3>
                        <span class="text-metallic-start font-bold">2024</span>
                    </div>
                    <p class="text-on-surface-variant mb-6 font-body-md">
                        Hybrid RS e:HEV
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Engine</span>
                            <span class="font-body-md font-semibold">2.0L Hybrid</span>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Transmission</span>
                            <span class="font-body-md font-semibold">e-CVT</span>
                        </div>
                    </div>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-outline font-label-sm text-[10px] uppercase">Starting At</span>
                            <span class="text-primary font-bold text-headline-md">Rp 814.4M</span>
                        </div>
                        <button
                            class="material-symbols-outlined text-primary bg-surface-container-highest p-3 rounded-full hover:bg-metallic-start transition-colors">
                            arrow_forward
                        </button>
                    </div>
                </div>
            </div>
            <!-- Toyota Alphard -->
            <div
                class="tilt-card group relative overflow-hidden bg-surface-container-low rounded-xl border border-outline-variant/20 h-full flex flex-col lg:col-span-2">
                <div class="grid md:grid-cols-2 h-full relative z-10">
                    <div class="relative h-full min-h-[300px] overflow-hidden">
                        <img
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="A pristine white Toyota Alphard luxury MPV positioned on a high-end coastal road at dusk."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNRHfbFZrEiQAXvLVbet0OfgPC3AV3v2X0Wg8luH1m7YyQ-Y3CNmoWfjnjHI99dxHMKsmXCaDNtqdKokAk82YdpyG9mnAl0vgj_YdihXeVQKzddBthc-0Ac8logU5rB64rHiqaG7UAOSbCpR_xQYyjrP1ADi6LgAs1P0kn6yxgwysZxkSILEwGHmlBI5jUuCp3bgTn67J2R4M5xi6hlxldwsWg8Q1NjiSi7MhoDJFxhGFwRraJLBti8nYJc6fwGwLS28pZx33l-Tur" />
                    </div>
                    <div
                        class="p-8 flex flex-col tilt-card-inner bg-surface-container-low">
                        <div class="flex justify-between items-start mb-2">
                            <h3
                                class="font-headline-md text-headline-md tracking-tight uppercase">
                                Toyota Alphard
                            </h3>
                            <span
                                class="bg-primary text-on-primary px-3 py-1 text-label-sm font-label-sm rounded">PREMIUM</span>
                        </div>
                        <p class="text-on-surface-variant mb-6 font-body-md">
                            HEV 2.5 Luxury Type
                        </p>
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="flex flex-col">
                                <span
                                    class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Performance</span>
                                <span class="font-body-md font-semibold">190 PS Hybrid</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Interior</span>
                                <span class="font-body-md font-semibold">Executive Lounge</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Safety</span>
                                <span class="font-body-md font-semibold">TSS 3.0</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Drivetrain</span>
                                <span class="font-body-md font-semibold">FWD e-CVT</span>
                            </div>
                        </div>
                        <div
                            class="mt-auto flex items-center justify-between border-t border-outline-variant/30 pt-6">
                            <div class="flex flex-col">
                                <span
                                    class="text-outline font-label-sm text-[10px] uppercase">Market Value</span>
                                <span class="text-primary font-bold text-headline-md">Rp 1.68B</span>
                            </div>
                            <button
                                class="metallic-button px-8 py-3 rounded-lg text-white font-bold tracking-widest uppercase text-label-sm">
                                Reserve Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mitsubishi Pajero Sport -->
            <div
                class="tilt-card group relative overflow-hidden bg-surface-container-low rounded-xl border border-outline-variant/20 h-full flex flex-col">
                <div class="relative h-64 overflow-hidden z-10">
                    <img
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A rugged yet elegant Mitsubishi Pajero Sport in deep black, standing on a misty mountain pass in Indonesia."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzjNM_efCSfeeMjlYNa5RcWJxcKlJUnxn4_WZN9ThWfUcledI2Qv2agdOdlK15-Wr0s4TYBYKtCnaeGypPRQ7sGD-cPw4AXyS7dsclHGgioDgDjG0L1U9LpaLYrlJ7F_DUY9YCNndjz--HCSb3d5ds892v0fIS_1CWpBG8sRukwjC40hlDrm0MzZu038MXMj--0kmXnZHUSi_jCTskknxpqQ2HQoWb_xAlUtQvw5sdp9PH7Rqk2z8xw_D_T-7k8AXI6F982uOyiHVv" />
                    <div class="absolute top-4 left-4">
                        <span
                            class="bg-surface-container-highest px-3 py-1 text-label-sm font-label-sm uppercase rounded">4x4 Ultimate</span>
                    </div>
                </div>
                <div
                    class="p-8 flex flex-col flex-grow tilt-card-inner relative z-10">
                    <h3
                        class="font-headline-md text-headline-md tracking-tight uppercase mb-2">
                        Pajero Sport
                    </h3>
                    <p class="text-on-surface-variant mb-6 font-body-md">
                        Dakar Ultimate 4x4
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Torque</span>
                            <span class="font-body-md font-semibold">430 Nm</span>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Transmission</span>
                            <span class="font-body-md font-semibold">8-Speed AT</span>
                        </div>
                    </div>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-primary font-bold text-headline-md">Rp 740.6M</span>
                        <button
                            class="material-symbols-outlined text-primary bg-surface-container-highest p-3 rounded-full hover:bg-metallic-start transition-colors">
                            arrow_forward
                        </button>
                    </div>
                </div>
            </div>
            <!-- Toyota Fortuner -->
            <div
                class="tilt-card group relative overflow-hidden bg-surface-container-low rounded-xl border border-outline-variant/20 h-full flex flex-col">
                <div class="relative h-64 overflow-hidden z-10">
                    <img
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A silver Toyota Fortuner GR Sport edition showcased under studio lights."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGeb90HrYIMpQt5CbpUL4vODpAH99On5EABdAw0B7nqDcSNeeXL5zKvsnCT3GPZayiu38Hgh7X2O0vtLjaga3_d7w6Y4z_RSTryPOYPA-6IxInWQ5G-iWlRmlagvh1ARGrkqqm-txRjU0r8muO1VKVvul65qNVTEOYVWzWjhoA624LRcEsK-mRzg41k_PtB7xjv3D7SQilYxOGIidQ8f00fRjE5NFh3IBaZ5srkPqGtC6wsOHH8FvkmPQfoRx-LoXfJpWNKcL1YWyF" />
                </div>
                <div
                    class="p-8 flex flex-col flex-grow tilt-card-inner relative z-10">
                    <h3
                        class="font-headline-md text-headline-md tracking-tight uppercase mb-2">
                        Toyota Fortuner
                    </h3>
                    <p class="text-on-surface-variant mb-6 font-body-md">
                        2.8 GR Sport 4x4
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Displacement</span>
                            <span class="font-body-md font-semibold">2,755 cc</span>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Fuel</span>
                            <span class="font-body-md font-semibold">Diesel</span>
                        </div>
                    </div>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-primary font-bold text-headline-md">Rp 735.8M</span>
                        <button
                            class="material-symbols-outlined text-primary bg-surface-container-highest p-3 rounded-full hover:bg-metallic-start transition-colors">
                            arrow_forward
                        </button>
                    </div>
                </div>
            </div>
            <!-- Daihatsu Rocky -->
            <div
                class="tilt-card group relative overflow-hidden bg-surface-container-low rounded-xl border border-outline-variant/20 h-full flex flex-col">
                <div class="relative h-64 overflow-hidden z-10">
                    <img
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A vibrant red Daihatsu Rocky compact SUV navigating a futuristic urban city street at night."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaQZfzo8sPSivbyCHdozriXlaJY245DxGXbtwJdC-F8XOSETcAL_G_b_XZ3Hg6lxYaYvgTkmO41cT6zLKAfwK5VGbO4wMA2J5yCtfQAb35kQmHGSu53hhg_L3VpAVSJ4RbqWtNsv5StLl6YN2AmGcAz5nTorfYkdbA0LlOvoOPZ4NrhCvzmVhWlpYttEGNCKvmxERcHzZ7mY5Cc5YZMTjpQTikbpI5p6X4lPKktE6ImfFi7yydKddEOcTRFIL77Vj9NxhoRADZmgMC" />
                </div>
                <div
                    class="p-8 flex flex-col flex-grow tilt-card-inner relative z-10">
                    <h3
                        class="font-headline-md text-headline-md tracking-tight uppercase mb-2">
                        Daihatsu Rocky
                    </h3>
                    <p class="text-on-surface-variant mb-6 font-body-md">
                        1.0 R TC ASA
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Engine</span>
                            <span class="font-body-md font-semibold">1.0 Turbo</span>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Safety</span>
                            <span class="font-body-md font-semibold">ASA Tech</span>
                        </div>
                    </div>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-primary font-bold text-headline-md">Rp 273.6M</span>
                        <button
                            class="material-symbols-outlined text-primary bg-surface-container-highest p-3 rounded-full hover:bg-metallic-start transition-colors">
                            arrow_forward
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection