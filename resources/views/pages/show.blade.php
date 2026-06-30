@extends('layouts.front')
@section('title', $page->title . ' — Elegance MOTORS')

@section('content')
<main class="relative z-10 pt-20">
    <!-- Hero -->
    <section class="relative h-[60vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-surface-dim/50 to-surface-dim z-10"></div>
            @if($page->image)
                <img class="w-full h-full object-cover opacity-50" 
                     src="{{ Storage::url($page->image) }}" 
                     alt="{{ $page->title }}">
            @else
                <!-- Fallback background jika tidak ada gambar -->
                <div class="w-full h-full bg-gradient-to-br from-surface-container-high to-surface-dim"></div>
            @endif
        </div>
        <div class="relative z-20 px-margin-desktop max-w-container-max w-full text-center">
            <h1 class="font-display-lg text-display-lg text-white mb-6 text-glow leading-none uppercase">
                {{ $page->title }}
            </h1>
        </div>
    </section>

    <!-- Content -->
    <section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
        <div class="tilt-card glass-panel p-10 md:p-16 rounded-xl max-w-4xl mx-auto">
            <div class="prose prose-invert max-w-none font-body-lg text-body-lg text-on-surface-variant leading-relaxed whitespace-pre-line">
                {{ $page->content }}
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
        <div class="bg-surface-container p-16 rounded-3xl border border-outline-variant/20 relative overflow-hidden text-center">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-metallic-start/10 rounded-full blur-[100px]"></div>
            <h2 class="font-headline-xl text-headline-xl text-white mb-6">
                READY TO EXPERIENCE ELEGANCE?
            </h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mx-auto mb-10">
                Bergabunglah dengan lingkaran eksklusif pemilik kami.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="{{ route('contact.index') }}"
                    class="metallic-cta px-12 py-5 text-on-surface font-bold uppercase tracking-widest text-label-sm rounded-lg hover:scale-105 transition-all duration-300 text-center">
                    Book A Private Consultation
                </a>
                <a href="{{ route('cars.index') }}"
                    class="border border-outline px-12 py-5 text-primary font-bold uppercase tracking-widest text-label-sm rounded-lg hover:bg-white/5 transition-all duration-300 text-center">
                    View Collection
                </a>
            </div>
        </div>
    </section>
</main>
@endsection