@extends('layouts.front')
@section('title', 'Elegance MOTORS — Engineering Excellence')
@section('content')
<section
    class="relative min-h-screen flex items-center pt-20 px-margin-desktop overflow-hidden">
    <div
        class="max-w-container-max mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-gutter items-center z-10">
        <div>
            <div
                class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container-high border border-outline-variant rounded-full mb-6">
                <span class="w-2 h-2 rounded-full bg-metallic-start animate-pulse"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">the choice of the elite {{ date('Y') }}</span>
            </div>
            <h1 class="font-display-lg text-display-lg mb-4 text-primary leading-tight">
                Passion<br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-outline">Excellence.</span>
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg mb-10">
                Experience the pinnacle of Japanese and international automotive
                craft. Curated luxury vehicles for the discerning Indonesian
                collector.
            </p>
            <div class="flex gap-4">
                <a href="{{ route('cars.index') }}"
                    class="metallic-cta px-10 py-4 font-label-sm text-label-sm uppercase tracking-widest text-on-surface font-bold">
                    Virtual Showroom
                </a>
                <a href="{{ route('contact.index') }}"
                    class="px-10 py-4 border border-outline-variant hover:bg-white/5 transition-all font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">
                    Book Test Drive
                </a>
            </div>
        </div>
        <div class="relative group">
            <div class="absolute -inset-4 bg-metallic-start/10 blur-3xl rounded-full opacity-50 group-hover:opacity-70 transition-opacity"></div>
            @if($featuredCar && $featuredCar->image)
            <img
                alt="{{ $featuredCar->name }}"
                class="relative z-10 w-full max-w-md drop-shadow-2xl tilt-card transform transition-transform duration-500 hover:scale-105"
                src="{{ Storage::url($featuredCar->image) }}" />
            @endif
        </div>
    </div>
</section>

<!-- Featured Cars -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-16">
        <div>
            <h2 class="font-headline-xl text-headline-xl text-primary mb-4">
                Featured Collection
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                Precision-selected models, ready for Indonesian roads.
            </p>
        </div>
        <a class="font-label-sm text-label-sm text-metallic-start flex items-center gap-2 hover:gap-4 transition-all"
            href="{{ route('cars.index') }}">
            VIEW ALL MODELS
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>

    @if($latestCars->isEmpty())
        <div class="glass-panel rounded-xl p-12 text-center text-on-surface-variant">
            Belum ada mobil yang ditambahkan.
        </div>
    @else
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        @foreach($latestCars as $car)
        <a href="{{ route('cars.show', $car->slug) }}"
            class="tilt-card group relative overflow-hidden glass-panel rounded-xl p-6 flex flex-col">
            <div class="relative h-56 overflow-hidden rounded-lg mb-4">
                <img
                    alt="{{ $car->name }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    src="{{ Storage::url($car->image) }}" />
                <div class="absolute top-3 left-3">
                    <span class="bg-surface-container-high/80 backdrop-blur-md px-3 py-1 text-label-sm font-label-sm uppercase rounded">
                        {{ $car->brand->name }}
                    </span>
                </div>
            </div>
            <h3 class="font-headline-md text-[22px] text-primary mb-1 group-hover:text-metallic-start transition-colors">
                {{ $car->name }}
            </h3>
            <p class="text-on-surface-variant text-sm mb-4">{{ $car->year }} &middot; {{ $car->transmission ?? 'N/A' }}</p>
            <div class="mt-auto flex items-center justify-between">
                <span class="text-primary font-bold text-headline-md">{{ $car->price_formatted }}</span>
                <span class="material-symbols-outlined text-primary bg-surface-container-highest p-3 rounded-full group-hover:bg-metallic-start transition-colors">
                    arrow_forward
                </span>
            </div>
        </a>
        @endforeach
    </div>
    @endif
</section>

<!-- Showroom Experience -->
<section class="py-section-gap bg-surface-container-low overflow-hidden">
    <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
        <div class="order-2 md:order-1 relative">
            <div class="grid grid-cols-2 gap-4">
                <div class="rounded-xl w-full h-80 bg-surface-container-high tilt-card shadow-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-6xl text-outline-variant">storefront</span>
                </div>
                <div class="rounded-xl w-full h-80 bg-surface-container-high tilt-card shadow-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-6xl text-outline-variant">support_agent</span>
                </div>
            </div>
        </div>
        <div class="order-1 md:order-2">
            <h2 class="font-headline-xl text-headline-xl text-primary mb-6">
                The Jakarta<br />Experience.
            </h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
                Located in the heart of Sudirman, our showroom is more than a
                dealership. It's a sanctuary for automotive enthusiasts where
                technology meets hospitality.
            </p>
            <div class="space-y-6 mb-10">
                <div class="flex gap-4">
                    <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-surface-container-highest rounded-full border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">verified</span>
                    </div>
                    <div>
                        <h4 class="font-body-lg text-body-lg font-bold text-primary">Certified Origins</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Every vehicle undergoes a 200-point rigorous technical inspection.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-surface-container-highest rounded-full border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">auto_fix</span>
                    </div>
                    <div>
                        <h4 class="font-body-lg text-body-lg font-bold text-primary">Elite Maintenance</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Specialized service bays with original parts and trained technicians.
                        </p>
                    </div>
                </div>
            </div>
            <a href="{{ route('contact.index') }}" class="metallic-cta px-10 py-4 font-label-sm text-label-sm uppercase tracking-widest text-on-surface font-bold inline-block">
                Schedule a Visit
            </a>
        </div>
    </div>
</section>

<!-- Latest Articles Preview -->
@if($latestArticles->isNotEmpty())
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-16">
        <h2 class="font-headline-xl text-headline-xl text-primary">Latest Insights</h2>
        <a href="{{ route('articles.index') }}" class="font-label-sm text-label-sm text-metallic-start flex items-center gap-2 hover:gap-4 transition-all">
            READ MORE
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        @foreach($latestArticles as $article)
        <a href="{{ route('articles.show', $article->slug) }}" class="tilt-card group glass-panel rounded-xl overflow-hidden flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
            </div>
            <div class="p-6">
                <span class="font-label-sm text-label-sm text-metallic-start uppercase">{{ $article->category->name }}</span>
                <h3 class="font-headline-md text-[20px] text-primary mt-2 group-hover:text-metallic-start transition-colors">
                    {{ $article->title }}
                </h3>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endif
@endsection
