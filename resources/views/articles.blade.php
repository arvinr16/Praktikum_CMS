@extends('layouts.front')
@section('content')
<main class="relative z-10 pt-32 pb-section-gap">
    <header
        class="max-w-container-max mx-auto px-5 md:px-margin-desktop mb-16">
        <div class="flex flex-col gap-4">
            <span
                class="font-label-sm text-label-sm text-metallic-start tracking-[0.2em] uppercase">Insight &amp; Journal</span>
            <h1
                class="font-headline-xl text-headline-xl md:text-display-lg max-w-3xl leading-tight text-primary">
                AUTOMOTIVE <br />EXCELLENCE
                <span class="text-outline">ARCHIVE</span>
            </h1>
            <p
                class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
                Exclusive editorial content covering maintenance protocols,
                technical reviews, and premium lifestyle guides for the Indonesian
                elite automotive community.
            </p>
        </div>
    </header>
    <section class="max-w-container-max mx-auto px-5 md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Featured Article -->
            <article class="md:col-span-8 group">
                <div
                    class="tilt-card h-full bg-surface-container-low border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col cursor-pointer">
                    <div class="relative h-[400px] overflow-hidden">
                        <img
                            alt="A high-performance Honda Civic RS 2024"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6iNqjLZmrMgMqtWfH6cPT9DBQcNwTpJzLTc7oJpp5sRhCrR_qOL16LF2TkkBF1_lDtasBxkmAamoj03UbTiVDHgFf_PmEeHcRIdLbW-tr5Qbsx5_YC4MlP0fPg3_Cq4yWu85eXjo-xWsTBUWvyaekhq68Z2jKzW8v6aSR2_SP-cUqTpyOjaL6Vs3IPVl2QCuVGUVywuMBfDfAV0ort-f85K2GkMldTyBLKUq8SWLe0lVDjW8oJtH0rGxfefEnkyvRMP_bxwdSWLpf" />
                        <div class="absolute top-6 left-6 flex gap-2">
                            <span
                                class="font-label-sm text-label-sm bg-surface-container-highest px-3 py-1 text-primary border border-outline-variant/30 backdrop-blur-md">TECHNICAL REVIEW</span>
                            <span
                                class="font-label-sm text-label-sm bg-metallic-start px-3 py-1 text-primary">FEATURED</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div
                            class="flex items-center gap-4 mb-4 font-label-sm text-label-sm text-outline">
                            <span class="">24 MEI 2024</span>
                            <span class="w-1 h-1 bg-outline rounded-full"></span>
                            <span class="">12 MIN READ</span>
                        </div>
                        <h2
                            class="font-headline-md text-headline-md text-primary mb-4 group-hover:text-metallic-start transition-colors">
                            Review Honda Civic RS 2024: Performa Legendaris dalam Balutan
                            Kemewahan Modern
                        </h2>
                        <p class="text-on-surface-variant mb-6 flex-grow">
                            Mengeksplorasi setiap sudut dari mahakarya terbaru Honda. Dari
                            dapur pacu turbo yang responsif hingga fitur keselamatan Honda
                            SENSING™ yang kini jauh lebih presisi untuk jalanan Jakarta.
                        </p>
                        <div
                            class="flex items-center text-primary font-bold group-hover:translate-x-2 transition-transform">
                            READ ARTICLE
                            <span class="material-symbols-outlined ml-2">arrow_forward</span>
                        </div>
                    </div>
                </div>
            </article>
            <!-- Sidebar Article 1 -->
            <article class="md:col-span-4 group">
                <div
                    class="tilt-card h-full bg-surface-container-low border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col cursor-pointer">
                    <div class="relative h-[240px] overflow-hidden">
                        <img
                            alt="Luxury Indonesian family MPV"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJ4bMP_hwFl80rZOevtbiB0NH87yq0ZrmrXN7xs_Qa8DritXIhrpAaq5ifJz0WXOCuhDHmakP1aP9GIx6UWvvFxB8ZfL5l9kz5aUZLFhO-isg-VMv73r_joP3U_5RUTEoFdHsmFj7WApKPgIQn6WnuJj85KjjCbZsOMOBh1IYVAeLGu9Yzz12eWMsmYkoPvcK6qC_Wn801HOLXGQ1hP6UqK6TIHfCUXq3ynuhAZiCl_Pe9mPmFpmRlVSXgFz6ckoyHJFrGZrUaCxA0" />
                        <div class="absolute top-4 left-4">
                            <span
                                class="font-label-sm text-label-sm bg-surface-container-highest px-3 py-1 text-primary border border-outline-variant/30 backdrop-blur-md">LIFESTYLE</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="flex items-center gap-3 mb-3 font-label-sm text-label-sm text-outline">
                            <span class="">20 MEI 2024</span>
                            <span class="w-1 h-1 bg-outline rounded-full"></span>
                            <span class="">8 MIN READ</span>
                        </div>
                        <h3
                            class="font-headline-md text-[24px] text-primary mb-3 group-hover:text-metallic-start transition-colors">
                            Tips Memilih Mobil Keluarga Terbaik di Indonesia
                        </h3>
                        <p class="text-on-surface-variant text-sm line-clamp-3">
                            Panduan komprehensif bagi Anda yang mengutamakan kenyamanan,
                            kapasitas, dan prestige dalam satu paket kendaraan keluarga
                            ideal.
                        </p>
                    </div>
                </div>
            </article>
            <!-- Sidebar Article 2 -->
            <article class="md:col-span-4 group">
                <div
                    class="tilt-card h-full bg-surface-container-low border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col cursor-pointer">
                    <div class="relative h-[240px] overflow-hidden">
                        <img
                            alt="Mechanical inspection"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0MzsGJk5A5CHb29jNSCOVPMJzZUFVuT81ge2NEL95c14oOlQmAICmaqFO5VXnf37FQ3RvT0-PCGEYt59lsO7a0QdoSbvykZyq5tS7iZKv5et-ENaEQht11L1vhdtrzNuy6aQCCLhrpI5OacoQo9usQLyTP5GgYnsLaiHkKwkzswnldX5iZ06gS35f2lfwd8-5E6ueMyy2FK6YBGwElJFmciFFF-hG5CVwDQetkSZwmggybT6vUHDebzOM81UzegDMZ4YEWyQs6_FB" />
                        <div class="absolute top-4 left-4">
                            <span
                                class="font-label-sm text-label-sm bg-surface-container-highest px-3 py-1 text-primary border border-outline-variant/30 backdrop-blur-md">MAINTENANCE</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div
                            class="flex items-center gap-3 mb-3 font-label-sm text-label-sm text-outline">
                            <span class="">18 MEI 2024</span>
                            <span class="w-1 h-1 bg-outline rounded-full"></span>
                            <span class="">6 MIN READ</span>
                        </div>
                        <h3
                            class="font-headline-md text-[24px] text-primary mb-3 group-hover:text-metallic-start transition-colors">
                            Keunggulan Servis Berkala di Aurum Motors
                        </h3>
                        <p class="text-on-surface-variant text-sm line-clamp-3">
                            Lebih dari sekadar ganti oli. Temukan standar emas perawatan
                            kendaraan yang menjaga nilai investasi dan performa mesin Anda
                            tetap prima.
                        </p>
                    </div>
                </div>
            </article>
            <!-- Horizontal Article -->
            <article class="md:col-span-8 group">
                <div
                    class="tilt-card h-full bg-surface-container-low border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col md:flex-row cursor-pointer">
                    <div class="relative w-full md:w-1/2 overflow-hidden">
                        <img
                            alt="Future tech visualization"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtEj0DGVHTHXu-qp0ULQ1Ulcch-Rya2PHh_GIon8YJ_H9UgUg2LhGyVXZpwx5m4DI_N8iyaqCqLuwRNpXhCy7YzIlFrDE6O4veLBMwm4RNd1DQ7gjVspxAINTX_rgornjicSN-8lq_705p0X-MGAQkuAlOH0RjO5fmG2J9PCLRDRYw86gRPpklDpCOqQB0vPusPM2xHHRUgzINzsD_2cI2hfgUNMS5jD9P0cIOP6Qx9RVID52VelGMAaLCtDqf36b7Hj48W92jgqDj" />
                    </div>
                    <div class="p-8 md:w-1/2 flex flex-col justify-center">
                        <div
                            class="font-label-sm text-label-sm text-metallic-start mb-2">
                            UPCOMING TECHNOLOGY
                        </div>
                        <h3
                            class="font-headline-md text-headline-md text-primary mb-4 group-hover:text-metallic-start transition-colors">
                            Hybrid vs Full Electric: Mana yang Tepat untuk Kota Besar?
                        </h3>
                        <p class="text-on-surface-variant mb-6">
                            Analisis mendalam mengenai infrastruktur pengisian daya di
                            Indonesia dan efisiensi energi untuk mobilitas urban kelas
                            atas.
                        </p>
                        <div
                            class="flex items-center gap-4 text-outline font-label-sm text-label-sm">
                            <span class="">COMING SOON</span>
                            <span class="material-symbols-outlined text-sm">lock</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Newsletter Section -->
    <section
        class="max-w-container-max mx-auto px-5 md:px-margin-desktop mt-section-gap">
        <div
            class="bg-surface-container-high border border-outline-variant/20 rounded-2xl p-8 md:p-16 relative overflow-hidden">
            <div
                class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-metallic-start/10 to-transparent pointer-events-none"></div>
            <div class="relative z-10 max-w-xl">
                <h2
                    class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary mb-6">
                    Jangan Lewatkan Update Eksklusif.
                </h2>
                <p class="text-on-surface-variant text-body-lg mb-8">
                    Berlangganan newsletter kami untuk mendapatkan ulasan teknis,
                    undangan peluncuran unit terbatas, dan tips perawatan langsung ke
                    email Anda.
                </p>
                <div class="flex flex-col md:flex-row gap-4">
                    <input
                        class="flex-grow bg-surface-container-low border border-outline-variant/30 rounded-lg px-6 py-4 text-on-surface focus:ring-2 focus:ring-metallic-start focus:border-transparent transition-all"
                        placeholder="Email Address"
                        type="email" />
                    <button
                        class="metallic-button px-8 py-4 rounded font-bold text-primary uppercase tracking-widest">
                        SUBSCRIBE
                    </button>
                </div>
                <p
                    class="text-outline text-xs mt-4 font-label-sm uppercase tracking-tighter">
                    PRIVACY PROTECTED. NO SPAM, ONLY PERFORMANCE.
                </p>
            </div>
        </div>
    </section>
</main>
@endsection