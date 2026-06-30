@extends('layouts.front')
@section('title', $car->name . ' — Elegancem MOTORS')
@section('content')
<main class="relative z-10 pt-20">
    <!-- Hero & Gallery -->
    <section class="px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
        <div class="flex flex-col lg:flex-row gap-gutter">
            <!-- Main Image -->
            <div class="lg:w-2/3">
                <div class="relative group rounded-xl overflow-hidden glass-card aspect-video mb-gutter">
                    <img
                        alt="{{ $car->name }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        src="{{ Storage::url($car->image) }}" />
                    <div class="absolute bottom-6 left-6 flex gap-3">
                        <span class="bg-surface-container-highest/80 backdrop-blur px-3 py-1 rounded-lg font-label-sm text-label-sm text-primary uppercase">{{ $car->brand->name }}</span>
                        <span class="{{ $car->status === 'available' ? 'bg-metallic-start' : 'bg-surface-container-highest' }} px-3 py-1 rounded-lg font-label-sm text-label-sm text-white uppercase">
                            {{ $car->status_label }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fast Specs & Action -->
            <div class="lg:w-1/3 flex flex-col gap-6">
                <div class="glass-card p-8 rounded-xl border-l-4 border-l-metallic-start tilt-card">
                    <h1 class="font-headline-md text-headline-md text-primary mb-2">
                        {{ $car->name }}
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
                        {{ $car->brand->name }} &middot; {{ $car->year }}
                    </p>
                    <div class="space-y-6">
                        <div class="flex justify-between items-end border-b border-outline-variant/30 pb-4">
                            <span class="font-label-sm text-label-sm text-outline uppercase tracking-widest">Harga</span>
                            <span class="font-headline-md text-headline-md text-primary font-bold">{{ $car->price_formatted }}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span class="material-symbols-outlined text-metallic-start mb-2">directions_car</span>
                                <p class="text-on-surface-variant font-label-sm text-label-sm uppercase">Tahun</p>
                                <p class="text-primary font-bold">{{ $car->year }}</p>
                            </div>
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span class="material-symbols-outlined text-metallic-start mb-2">settings</span>
                                <p class="text-on-surface-variant font-label-sm text-label-sm uppercase">Transmisi</p>
                                <p class="text-primary font-bold">{{ $car->transmission ?? 'N/A' }}</p>
                            </div>
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span class="material-symbols-outlined text-metallic-start mb-2">speed</span>
                                <p class="text-on-surface-variant font-label-sm text-label-sm uppercase">Kilometer</p>
                                <p class="text-primary font-bold">{{ $car->mileage ? number_format($car->mileage,0,',','.') . ' km' : 'N/A' }}</p>
                            </div>
                            <div class="bg-surface-container-high p-4 rounded-lg">
                                <span class="material-symbols-outlined text-metallic-start mb-2">verified</span>
                                <p class="text-on-surface-variant font-label-sm text-label-sm uppercase">Status</p>
                                <p class="text-primary font-bold">{{ $car->status_label }}</p>
                            </div>
                        </div>
                        <a href="{{ route('contact.index') }}"
                            class="metallic-button w-full py-5 rounded-lg text-white font-bold flex items-center justify-center gap-3">
                            <span class="material-symbols-outlined">event_available</span>
                            BOOK TEST DRIVE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Description -->
    <section class="px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max mx-auto">
        <h2 class="font-headline-xl text-headline-xl text-primary text-center mb-16 text-glow">
            Tentang Mobil Ini
        </h2>
        <div class="glass-card p-10 rounded-2xl tilt-card max-w-4xl mx-auto">
            <p class="text-on-surface-variant font-body-lg text-body-lg leading-relaxed whitespace-pre-line">
                {{ $car->description }}
            </p>
        </div>
    </section>

    <!-- Inquiry CTA -->
    <section class="bg-surface-container-low py-section-gap border-y border-outline-variant/20">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
            <h2 class="font-headline-xl text-headline-xl text-primary mb-6">
                Tertarik dengan {{ $car->name }}?
            </h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg mb-10 max-w-xl mx-auto">
                Spesialis kami siap membantu Anda dengan penawaran khusus,
                pembiayaan, dan jadwal test drive pribadi.
            </p>
            <a href="{{ route('contact.index') }}"
                class="metallic-button px-12 py-5 rounded-lg text-white font-bold tracking-widest uppercase inline-block">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>
</main>
@endsection