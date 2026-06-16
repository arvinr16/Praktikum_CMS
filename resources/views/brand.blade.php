@extends('layouts.front')
@section('content')
<main class="relative z-10 pt-20">
    <!-- Hero Section & Gallery -->
    <section
        class="px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
        <div class="flex flex-col lg:flex-row gap-gutter">
            <!-- Main Gallery Canvas -->
            <div class="lg:w-2/3">
                <div
                    class="relative group rounded-xl overflow-hidden glass-card aspect-video mb-gutter">
                    <img
                        alt="Toyota Fortuner 2.8 GR Sport"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnHPhqjBKd3YXuZPaLin1v0Nxm3JEOA_mzu0qFhI5aEssgMzReopslf_Al5vpRYTfx52gRNzFX-FJOnF7LuuEBAYYkjWy5D4bZFPgNhw09fi7eXIN5iVeauZx6JaVCSzLatbUCafiYi6dU379_3P-MfOJL_5AKjYk1ymuHVRx0BHf8UJyv9SPCDdRwAV7RH1ZOtzjQlLfdAjv-nt0D-ZM0doTjysluhWNy3ghV4XN9svaU57oBXF1nM-o3TsKB3gzRsakYc7Bqsu6S" />
                    <div class="absolute bottom-6 left-6 flex gap-3">
                        <span
                            class="bg-surface-container-highest/80 backdrop-blur px-3 py-1 rounded-lg font-label-sm text-label-sm text-primary uppercase">Exclusive Edition</span>
                        <span
                            class="bg-metallic-start px-3 py-1 rounded-lg font-label-sm text-label-sm text-white uppercase">GR Sport</span>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div
                        class="aspect-square rounded-lg overflow-hidden glass-card cursor-pointer opacity-60 hover:opacity-100 transition-all">
                        <img
                            class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0QNUw6d7ByKsu17sQWU-zmEeeMRncAA2oZ_tzfdJDwnEdTBppL212Lu9kfi7xW_56iMnt4YIPy6bh6pGwuKpiWaJNy0G74ir4WO-4RE2qS0Xje-Um0dj3sUw5znVzOEBFYb0GxLq9Gv6f5ovssXWo1l42Evl8xY1I4dvnVVL7_L7GLHo400Hm8NaIJ_FuJ3chot_YVm_UQnaTGKCEoyQUBhfyj-PqD9Y2XRfmtCKxEIhZzqw2sNeGVeAZF7XGu1cj9X_CwgG0QkbD" />
                    </div>
                    <div
                        class="aspect-square rounded-lg overflow-hidden glass-card cursor-pointer opacity-60 hover:opacity-100 transition-all">
                        <img
                            class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2vnprx_Ra2qUelKaHIdkNTZCn5hhFg8mthvWjqbb86H1XjnvO5wFv0UjdN0TR7qJjAYA2RkDwZshWHw-_4ARmL5kXZnyrBwtL054UFxVPIIcWEKi32-9gUTpSP-cP9QjrVsy5Jut6yXLiHw5VgT2uQckD32HhWbZ3jqJEBYa94SJ59jrqZfjQ0jKkKApuFsFxNHHOJ40kbx3vJwsZExJsg3pZw9Hh7IB_w1N4N2vS-2ejeJSCrJU0IwHyp5GfZykAWWRr5SzEVZUy" />
                    </div>
                    <div
                        class="aspect-square rounded-lg overflow-hidden glass-card cursor-pointer opacity-60 hover:opacity-100 transition-all">
                        <img
                            class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBML4GLe3eDMumJVvyKRsOjuCiBwjV_gyU4T9gduyK8d5oedq3sCfqKzwQLkInVFpRArNap423lFDMfzmMDtxicn-Mo58_MuHXTaZgOAfYxYUHWRgs8IIULTbA6CNzsRfb7hEblrCC98S4nyqwS_LQGg081V-fEKXfexZ4h8kp1pB96VfLhh9y-6-qjnbK7dZhQqIzYIxbgyvMvqmVFmaqMSm6MnluDOBU8tQvFB8kddSqdH-aEUPyL4JU8q4W-O35aHSQUtIPm0TAs" />
                    </div>
                    <div
                        class="aspect-square rounded-lg overflow-hidden glass-card cursor-pointer opacity-60 hover:opacity-100 transition-all">
                        <img
                            class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcnTanGsA-jGW7V2KsYZ5g0G84IKHDyPGkLHreR4KI8P6DxVXSlTosjDVvAkrSPyfEI6dDEk56WLaOJXcYhSetVQRaB5o12uL62mkfutAaPZUP20T7r1Dn9vl8fH7UqfI6aO84u8X9MLSqafP0hC7zbpqfFbJI7P_nj8HBm9uef7CFAyKxZ5prDjcJKetXBmSrBZRiGeDSeERS-iC6Ssr35rjFj54m5wj4F0j2eeRkdLUgX6slSgbCee4Usu1ZOu9iP50YBst75aUK" />
                    </div>
                </div>
            </div>
            <!-- Fast Specs & Action -->
            <div class="lg:w-1/3 flex flex-col gap-6">
                <div
                    class="glass-card p-8 rounded-xl border-l-4 border-l-metallic-start tilt-card">
                    <h1 class="font-headline-md text-headline-md text-primary mb-2">
                        Toyota Fortuner 2.8 GR Sport
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
                        The Pinnacle of Prestige &amp; Power.
                    </p>
                    <div class="space-y-6">
                        <div
                            class="flex justify-between items-end border-b border-outline-variant/30 pb-4">
                            <span
                                class="font-label-sm text-label-sm text-outline uppercase tracking-widest">Base Price</span>
                            <span
                                class="font-headline-md text-headline-md text-primary font-bold">IDR 745.000.000</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span
                                    class="material-symbols-outlined text-metallic-start mb-2"
                                    data-icon="settings_input_component">settings_input_component</span>
                                <p
                                    class="text-on-surface-variant font-label-sm text-label-sm uppercase">
                                    Engine
                                </p>
                                <p class="text-primary font-bold">1GD-FTV Diesel</p>
                            </div>
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span
                                    class="material-symbols-outlined text-metallic-start mb-2"
                                    data-icon="speed">speed</span>
                                <p
                                    class="text-on-surface-variant font-label-sm text-label-sm uppercase">
                                    Transmission
                                </p>
                                <p class="text-primary font-bold">6-Speed AT</p>
                            </div>
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span
                                    class="material-symbols-outlined text-metallic-start mb-2"
                                    data-icon="bolt">bolt</span>
                                <p
                                    class="text-on-surface-variant font-label-sm text-label-sm uppercase">
                                    Power
                                </p>
                                <p class="text-primary font-bold">203.9 PS / 3400rpm</p>
                            </div>
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span
                                    class="material-symbols-outlined text-metallic-start mb-2"
                                    data-icon="auto_transmission">auto_transmission</span>
                                <p
                                    class="text-on-surface-variant font-label-sm text-label-sm uppercase">
                                    Torque
                                </p>
                                <p class="text-primary font-bold">50.9 kgm / 1600rpm</p>
                            </div>
                        </div>
                        <button
                            class="metallic-button w-full py-5 rounded-lg text-white font-bold flex items-center justify-center gap-3">
                            <span
                                class="material-symbols-outlined"
                                data-icon="event_available">event_available</span>
                            BOOK TEST DRIVE
                        </button>
                        <button
                            class="w-full py-5 rounded-lg border border-outline-variant hover:bg-white/5 transition-all text-primary font-bold">
                            DOWNLOAD BROCHURE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technical Specification Bento Grid -->
    <section
        class="px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max mx-auto overflow-hidden">
        <h2
            class="font-headline-xl text-headline-xl text-primary text-center mb-16 text-glow">
            Technical Mastery
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Powerhouse Card -->
            <div
                class="md:col-span-8 glass-card p-10 rounded-2xl relative group transition-all duration-500 overflow-hidden tilt-card">
                <div class="relative z-10">
                    <span
                        class="bg-metallic-start/10 text-metallic-start font-label-sm text-label-sm px-4 py-1 rounded-full mb-6 inline-block">ENGINEERING</span>
                    <h3 class="font-headline-md text-headline-md text-primary mb-6">
                        1GD-FTV 2.8L Intercooler Turbo
                    </h3>
                    <p
                        class="text-on-surface-variant font-body-lg text-body-lg max-w-xl mb-8">
                        Experience a redefined diesel engine that balances raw
                        Indonesian terrain capability with smooth metropolitan
                        refinement. The GR Sport tuning provides responsive torque
                        delivery for immediate acceleration.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div>
                            <h4 class="text-metallic-start font-bold text-headline-md">
                                2,755
                            </h4>
                            <p
                                class="text-on-surface-variant font-label-sm text-label-sm">
                                Displacement (cc)
                            </p>
                        </div>
                        <div>
                            <h4 class="text-metallic-start font-bold text-headline-md">
                                50.9
                            </h4>
                            <p
                                class="text-on-surface-variant font-label-sm text-label-sm">
                                Max Torque (kgm)
                            </p>
                        </div>
                        <div>
                            <h4 class="text-metallic-start font-bold text-headline-md">
                                Euro 4
                            </h4>
                            <p
                                class="text-on-surface-variant font-label-sm text-label-sm">
                                Emission Standard
                            </p>
                        </div>
                        <div>
                            <h4 class="text-metallic-start font-bold text-headline-md">
                                CRDi
                            </h4>
                            <p
                                class="text-on-surface-variant font-label-sm text-label-sm">
                                Fuel System
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute -right-20 -bottom-20 w-80 h-80 bg-metallic-start/5 blur-[100px] rounded-full group-hover:bg-metallic-start/10 transition-colors duration-500"></div>
            </div>
            <!-- Suspension Card -->
            <div
                class="md:col-span-4 glass-card p-10 rounded-2xl flex flex-col justify-between tilt-card">
                <div>
                    <span
                        class="material-symbols-outlined text-metallic-start text-4xl mb-6"
                        data-icon="architecture">architecture</span>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">
                        GR Sport Suspension
                    </h3>
                    <p class="text-on-surface-variant">
                        Enhanced shock absorbers and coil springs for more precise
                        handling and reduced body roll during high-speed maneuvers.
                    </p>
                </div>
                <div class="mt-8 pt-8 border-t border-outline-variant/30">
                    <p class="text-primary font-bold">Mono-tube Shock Absorbers</p>
                    <p
                        class="text-on-surface-variant font-label-sm text-label-sm uppercase mt-1">
                        Exclusive GR Tuning
                    </p>
                </div>
            </div>
            <!-- Interior Luxury -->
            <div
                class="md:col-span-4 glass-card p-10 rounded-2xl flex flex-col gap-8 tilt-card">
                <img
                    class="rounded-lg h-48 object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQf6OjwFmd5Zt1w5IU_7HHiyPaCrR3by12RRBLtyXCO3OFi9rEFG_P3g5J0KuzEGQ4iA2nXPkjYi5KwSGzN7ZFmtAheA1E-MfPNSN-dB1X-nEvWHvPIu6DRqXA4u5AqVEjvecm1K9MEFGuivGtcoo3GEXjJK_gCnYMLSQ3hXQsqrEQF75BlXX63sBT-VBnnf0cyQLWFIwq4j_l4WVW_2xzciEW_z_2KLQys6eevOYv9iC2dw0OIxNHsj1jgvMQWgHjoYTlzqYYJ_Ut" />
                <div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">
                        Stealth Interior
                    </h3>
                    <p class="text-on-surface-variant">
                        Black leather seats with GR embroidery, dark silver accents, and
                        red stitching for a high-performance cockpit feel.
                    </p>
                </div>
            </div>
            <!-- Safety System -->
            <div
                class="md:col-span-8 glass-card p-10 rounded-2xl flex flex-col md:flex-row gap-10 items-center tilt-card">
                <div class="flex-1">
                    <span
                        class="bg-primary/10 text-primary font-label-sm text-label-sm px-4 py-1 rounded-full mb-6 inline-block">TOYOTA SAFETY SENSE</span>
                    <h3 class="font-headline-md text-headline-md text-primary mb-6">
                        Advanced Protection (TSS)
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-on-surface-variant">
                            <span
                                class="material-symbols-outlined text-metallic-start"
                                data-icon="check_circle">check_circle</span>
                            Pre-Collision System (PCS)
                        </li>
                        <li class="flex items-center gap-3 text-on-surface-variant">
                            <span
                                class="material-symbols-outlined text-metallic-start"
                                data-icon="check_circle">check_circle</span>
                            Lane Departure Alert (LDA)
                        </li>
                        <li class="flex items-center gap-3 text-on-surface-variant">
                            <span
                                class="material-symbols-outlined text-metallic-start"
                                data-icon="check_circle">check_circle</span>
                            Dynamic Radar Cruise Control
                        </li>
                    </ul>
                </div>
                <div
                    class="flex-1 bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/20">
                    <p class="text-primary font-bold mb-4">7 SRS Airbags</p>
                    <p class="text-on-surface-variant font-body-md text-body-md">
                        Comprehensive shielding including dual front, side, curtain, and
                        driver knee airbags for maximum security.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Inquiry Form -->
    <section
        class="bg-surface-container-low py-section-gap border-y border-outline-variant/20">
        <div
            class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="flex flex-col lg:flex-row gap-section-gap items-center">
                <div class="lg:w-1/2">
                    <h2 class="font-headline-xl text-headline-xl text-primary mb-6">
                        Experience the Aurum Concierge
                    </h2>
                    <p
                        class="text-on-surface-variant font-body-lg text-body-lg mb-10">
                        Our specialists are ready to tailor a bespoke acquisition
                        package for your new Fortuner 2.8 GR Sport. From exclusive
                        financing to private test drives at your doorstep.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-primary font-bold mb-2">Jakarta Showroom</h4>
                            <p class="text-on-surface-variant">
                                Jl. Sudirman No. 12<br />Pusat Bisnis Utama
                            </p>
                        </div>
                        <div>
                            <h4 class="text-primary font-bold mb-2">Direct Contact</h4>
                            <p class="text-on-surface-variant">
                                +62 21 555 0123<br />concierge@aurum-motors.id
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full">
                    <form
                        class="glass-card p-10 rounded-2xl shadow-2xl relative tilt-card">
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label
                                        class="font-label-sm text-label-sm text-outline uppercase">Full Name</label>
                                    <input
                                        class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 transition-all"
                                        placeholder="Aditya Pratama"
                                        type="text" />
                                </div>
                                <div class="space-y-2">
                                    <label
                                        class="font-label-sm text-label-sm text-outline uppercase">WhatsApp Number</label>
                                    <input
                                        class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 transition-all"
                                        placeholder="+62 812-xxxx-xxxx"
                                        type="tel" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="font-label-sm text-label-sm text-outline uppercase">Inquiry Type</label>
                                <select
                                    class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 transition-all">
                                    <option>Request Test Drive</option>
                                    <option>Financing Calculation</option>
                                    <option>Trade-In Valuation</option>
                                    <option>Check Stock Availability</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="font-label-sm text-label-sm text-outline uppercase">Message (Optional)</label>
                                <textarea
                                    class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 transition-all"
                                    placeholder="Any specific requirements..."
                                    rows="4"></textarea>
                            </div>
                            <button
                                class="metallic-button w-full py-5 rounded-lg text-white font-bold tracking-widest uppercase"
                                type="submit">
                                Send Inquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection