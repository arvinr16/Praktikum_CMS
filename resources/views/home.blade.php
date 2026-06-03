@extends('layouts.front')
@section('content')
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-16">
        <div>
            <span class="font-label-sm text-label-sm text-tertiary uppercase">Curated Selection</span>
            <h2 class="font-headline-xl text-headline-xl mt-2 uppercase">Featured Collection</h2>
        </div>
        <a class="font-body-md text-primary flex items-center gap-2 group" href="#">
            View All Vehicles
            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <!-- Large Card -->
        <div class="md:col-span-8 group cursor-pointer overflow-hidden rounded-xl bg-surface-container border border-outline-variant transition-all hover:border-primary/50">
            <div class="aspect-[21/9] overflow-hidden">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A front three-quarter view of a black Ferrari F8 Tributo in a high-tech, monochromatic garage setting with glowing LED light strips on the ceiling. The car's aggressive stance and carbon fiber details are highlighted by sharp, crisp reflections. The mood is intense and futuristic, adhering to a minimalist luxury aesthetic with a focus on metallic textures and precision engineering." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbuXdfacCQ1X8MpJPEBUYDnAf-o5cJTcPfHZ1kNMSZxOBg_OAkMl336A7Kv6LtDg6K5yaFYONeN4It2oqEessuQJ44H2v3Fuz2tQuGtDmzCKgPzzztvjOYF73Cn9r0OphaNYBo3Et4l0zAj7-ffsxVGhjcLP3bp6q3GT4ESHT4EqIL-9vZuMT17wE7AxW0uPcICqlzbF_m0jO8NlkaYRtNAjjswkZ992UVLM5CyEb_VIZtezE-qeV2Emarwj9Q9eamiA7gtukf1Yc" />
            </div>
            <div class="p-8 flex justify-between items-center">
                <div>
                    <h3 class="font-headline-md text-headline-md uppercase">F8 Tributo '23</h3>
                    <div class="flex gap-8 mt-4">
                        <div class="flex flex-col">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Engine</span>
                            <span class="font-body-md text-body-md font-semibold">3.9L V8 Bi-Turbo</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">0-100 km/h</span>
                            <span class="font-body-md text-body-md font-semibold">2.9 Seconds</span>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <span class="font-label-sm text-label-sm text-tertiary uppercase mb-1 block">Starting At</span>
                    <span class="font-headline-md text-headline-md text-primary">$325,000</span>
                </div>
            </div>
        </div>
        <!-- Small Card 1 -->
        <div class="md:col-span-4 group cursor-pointer overflow-hidden rounded-xl bg-surface-container border border-outline-variant transition-all hover:border-primary/50">
            <div class="aspect-square overflow-hidden">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Detailed close-up shot of the rear wing and taillights of a dark grey Porsche 911 Turbo S. The intricate design of the active aerodynamics and the glowing red LED light bar are captured with high precision. The lighting is dramatic, casting deep shadows while illuminating the metallic flakes in the paint, creating a moody and sophisticated technical atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJQF4JZBQCqs1ruNtLNm0WseBy6_asgILXFlG6Zg4S9Ijg9lmpFS4WXvxDvfpgbpZ6OxM0P68u8ZFdEHmdcjbF5z7bg0XgMsfDDSqtN-yTDysEIhQMKhndu2pMvTCQeSQTC0utKhRpLWVU09P0vH2YHF66SaVTNHAv1Wz53DQz3Mr5uwwbVAgTbt5zIyh78d8KXkNIiRHT_uuHgAJundDfolL0y38tX2g3NBVLegrYYGoBPXULd1t8pHqrPeN3jpoz0CR6GiAHxYg" />
            </div>
            <div class="p-6">
                <h3 class="font-body-lg text-body-lg font-bold uppercase">911 Turbo S</h3>
                <div class="flex justify-between items-end mt-4">
                    <span class="font-body-md text-body-md text-on-surface-variant">2.7s to 100km/h</span>
                    <span class="font-body-lg text-body-lg text-primary font-bold">$230,000</span>
                </div>
            </div>
        </div>
        <!-- Small Card 2 -->
        <div class="md:col-span-4 group cursor-pointer overflow-hidden rounded-xl bg-surface-container border border-outline-variant transition-all hover:border-primary/50">
            <div class="aspect-square overflow-hidden">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A modern electric grand tourer, the Taycan Turbo S, finished in frozen metallic blue. The car is positioned on a wet asphalt surface at night, reflecting ambient neon lights. The aesthetic is clean, sustainable luxury, with a focus on smooth lines and futuristic design elements. High-contrast lighting with a dark obsidian background and soft blue highlights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC5o_PX8noamiRtcpfKEdXp-972O5GBIDOa-JkeYufq304NYO7k6CIzpO3uLE0c45508TxfPf7FC_1ZfAqlY5LehodnwMWPUVE43Ocw1EMAM-8JLhx5AjR2lWp5mrp0oKsCFUXnctWdFZCSuoNALFFb7evt7E26NX2wADuelowo47rH_Liopt5W4fApd5ClFVE0QTe0z9ql50S2mRpgyUtCHrXb8Qq0FfwSiBHoBOHnBE8z43UjfZPIK_tVfwKPMBcxi-rvW7o8YA" />
            </div>
            <div class="p-6">
                <h3 class="font-body-lg text-body-lg font-bold uppercase">Taycan Turbo S</h3>
                <div class="flex justify-between items-end mt-4">
                    <span class="font-body-md text-body-md text-on-surface-variant">750hp Electric</span>
                    <span class="font-body-lg text-body-lg text-primary font-bold">$194,000</span>
                </div>
            </div>
        </div>
        <!-- Wide Secondary Card -->
        <div class="md:col-span-8 group cursor-pointer overflow-hidden rounded-xl bg-surface-container border border-outline-variant transition-all hover:border-primary/50 flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 aspect-square md:aspect-auto overflow-hidden">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A front-facing view of a midnight black Lamborghini Huracan STO. The car's aggressive vents and racing-derived carbon fiber components are sharp and clearly defined against a neutral grey studio background. The lighting is professional and cold, highlighting the car's extreme performance character and luxurious carbon finishes." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIGVavIM3lTcQZLllwQqXpMe8Ilx0RWGtX-n3e1HSYFgnBiX9TXkiE5d7iPv4KmKqA1BK1PHoB-WDY9pdxFhA1mbyA0rfMW5rKrADC5prnsbVpVs3DZVB8TZR7Xz_r8NR7WQcxp47pFi-CWw5J9JDSiW0f8t1GVqOyEnZBDDtxpHXd8QJUzmB33QFqwvCwVa8WgW3tzszFtw63ctSlVzr8JlUN5IyAFa_AZVf7DRzjyBVXvIVKtHXILQf9S1manKl_dEDyGJV_RYo" />
            </div>
            <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
                <h3 class="font-headline-md text-headline-md uppercase mb-4">Huracán STO</h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-6">A track-focused masterpiece designed for the purists. Extreme aerodynamics meet V10 soul.</p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <span class="font-label-sm text-label-sm text-tertiary uppercase block">Top Speed</span>
                        <span class="font-body-lg text-body-lg font-bold">310 km/h</span>
                    </div>
                    <div>
                        <span class="font-label-sm text-label-sm text-tertiary uppercase block">Weight</span>
                        <span class="font-body-lg text-body-lg font-bold">1,339 kg</span>
                    </div>
                </div>
                <button class="w-full py-4 border border-primary text-primary hover:bg-primary hover:text-background transition-all uppercase tracking-widest font-bold">Inquire Now</button>
            </div>
        </div>
    </div>
</section>
<!-- Services Section -->
<section class="bg-surface-container-low py-section-gap">
    <div class="px-margin-desktop max-w-container-max mx-auto text-center">
        <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest">Aurum Excellence</span>
        <h2 class="font-headline-xl text-headline-xl mt-4 mb-16 uppercase">Concierge Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="p-10 bg-surface-container-highest rounded-xl border border-outline-variant hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-8">
                    <span class="material-symbols-outlined text-4xl text-primary" style="font-variation-settings: 'FILL' 1;">build</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-[24px] uppercase mb-4">Premium Maintenance</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Our factory-certified master technicians utilize state-of-the-art diagnostic equipment to ensure your vehicle performs at its absolute peak.</p>
            </div>
            <div class="p-10 bg-surface-container-highest rounded-xl border border-outline-variant hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-8">
                    <span class="material-symbols-outlined text-4xl text-primary" style="font-variation-settings: 'FILL' 1;">payments</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-[24px] uppercase mb-4">Custom Financing</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Bespoke financial arrangements tailored to your portfolio, offering flexible leasing and competitive acquisition structures for high-value assets.</p>
            </div>
            <div class="p-10 bg-surface-container-highest rounded-xl border border-outline-variant hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-8">
                    <span class="material-symbols-outlined text-4xl text-primary" style="font-variation-settings: 'FILL' 1;">auto_fix_high</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-[24px] uppercase mb-4">Exclusive Detailing</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Meticulous restoration and preservation using aerospace-grade ceramic coatings and bespoke paint protection films for a concours-level finish.</p>
            </div>
        </div>
    </div>
</section>
<!-- About / Vision Section -->
<section class="py-section-gap relative overflow-hidden">
    <div class="px-margin-desktop max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <div class="relative">
            <div class="aspect-[4/5] rounded-xl overflow-hidden">
                <img class="w-full h-full object-cover" data-alt="An ultra-modern, luxury car showroom interior at night. The space is vast with polished black marble floors reflecting the warm, spotlights above. A few high-end sports cars are artfully positioned in the background, out of focus. The architectural lines are sharp and minimal, exuding an atmosphere of elite exclusivity and engineering perfection." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl2RgyEJ5YknWRM_fJNmSH6O_KscLTbmq_pPDdjS6Ke4dS0XQ38NmZAXBKKpzctDNTQkNnXZEGbhlLooPJvKx0OnwBaJzdqPvwV85M8UbNMj3CD-ma9TNo6n_yoO804WgW19iEi6WbVsrpcbzoISFr59bccJbcAaMwc45WDTH96CcxzFVlua1bEsGXKM8PuhNNu5DYOUb2YgCV7uYj4-wTv_S9frfqBDa9xgz2MpsALOyDcJUQScKOzWeuWqBHJFJ4hSY9hixHyyk" />
            </div>
            <div class="absolute -bottom-10 -right-10 bg-primary-container p-10 border border-outline-variant rounded-xl hidden md:block">
                <span class="font-display-lg text-[64px] text-primary block leading-none">25+</span>
                <span class="font-label-sm text-label-sm text-on-surface uppercase tracking-[0.2em]">Years of Excellence</span>
            </div>
        </div>
        <div>
            <span class="font-label-sm text-label-sm text-tertiary uppercase">The Vision</span>
            <h2 class="font-headline-xl text-headline-xl mt-4 mb-8 uppercase">Redefining the<br />Luxury Experience</h2>
            <div class="space-y-6">
                <p class="font-body-lg text-body-lg text-on-surface">AURUM MOTORS was founded on the principle that a car is more than a machine; it is a manifestation of passion, engineering precision, and artistic expression.</p>
                <p class="font-body-md text-body-md text-on-surface-variant">Our showroom is a sanctuary for the discerning collector. We curate only the most exceptional vehicles, ensuring that every acquisition at Aurum is a seamless transition into a world of unmatched prestige and performance.</p>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8">
                <div>
                    <h4 class="font-headline-md text-[20px] uppercase mb-2">Global Network</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant">Access to the world's most exclusive private collections.</p>
                </div>
                <div>
                    <h4 class="font-headline-md text-[20px] uppercase mb-2">White Glove Delivery</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant">Enclosed transport to any location worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Location / Contact Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="bg-surface-container rounded-2xl overflow-hidden flex flex-col md:flex-row border border-outline-variant">
        <div class="w-full md:w-1/2 p-12 md:p-20">
            <h2 class="font-headline-xl text-headline-xl mb-12 uppercase">Visit Our<br />Showroom</h2>
            <div class="space-y-10">
                <div class="flex items-start gap-6">
                    <span class="material-symbols-outlined text-primary">location_on</span>
                    <div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-2">Location</p>
                        <p class="font-body-lg text-body-lg">8800 Motorsport Drive<br />Los Angeles, CA 90210</p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <span class="material-symbols-outlined text-primary">schedule</span>
                    <div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-2">Operating Hours</p>
                        <p class="font-body-lg text-body-lg">Mon - Sat: 09:00 AM - 08:00 PM<br />Sunday: By Private Appointment</p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <span class="material-symbols-outlined text-primary">call</span>
                    <div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-2">Direct Line</p>
                        <p class="font-headline-md text-headline-md text-[24px]">+1 (555) AURUM-00</p>
                    </div>
                </div>
            </div>
            <button class="mt-12 w-full py-4 bg-on-surface text-background font-bold rounded-lg uppercase tracking-widest hover:bg-primary transition-colors">Get Directions</button>
        </div>
        <div class="w-full md:w-1/2 h-[400px] md:h-auto bg-surface-container-highest relative grayscale contrast-125">
            <!-- Map Placeholder -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <span class="material-symbols-outlined text-6xl text-primary mb-4">map</span>
                    <p class="font-label-sm text-label-sm uppercase">Interactive Showroom Map</p>
                </div>
            </div>
            <img class="w-full h-full object-cover opacity-30" data-alt="A dark-themed, stylized satellite map view of Beverly Hills and surrounding Los Angeles areas. The map uses a charcoal and deep grey color palette with primary red accents highlighting key thoroughfares. It has a high-tech, digital aesthetic consistent with luxury automotive navigation systems." data-location="Los Angeles" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5quQUFbW0AJ4HSBl5T_1qHfLHM6z6vePgEwBbWHek1iu9gtOg4na5Y9y3N6fiFSmjbQBKtueSJZ6D51Fup03RxBUF0IOqxky5EZ3Y43EwFdGp6h2v0U55BkEyuZKdCx0z_aNzGhRFeMrn7O9g4qr-Qmxtpv7SahHWVraX9esdQD9Ra-ykT-SYjSfczNcHOmj_SydPmtYQGW-FHORL24xswVnI4c60ihNT8jdg0JsQ5Wb79wK9vihZD_ZaAqka4CCI6RNyhrl9eUQ" />
        </div>
    </div>
</section>
@endsection