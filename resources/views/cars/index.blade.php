@extends('layouts.front')
@section('title', 'Inventory — Elegance MOTORS')
@section('content')
<main class="pt-32 pb-section-gap relative z-10">
    <!-- Hero -->
    <section class="px-margin-desktop max-w-container-max mx-auto mb-16">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h1 class="font-display-lg text-display-lg uppercase italic tracking-tighter mb-4">
                    The <span class="text-metallic-start">Inventory</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Curated performance and unparalleled luxury. Explore our exclusive
                    collection of Jakarta's finest automotive engineering.
                </p>
            </div>
            <div class="flex items-center gap-4 text-label-sm font-label-sm">
                <span class="text-on-surface-variant">AVAILABLE UNITS:</span>
                <span class="text-primary text-headline-md font-bold">{{ $cars->total() }}</span>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class="px-margin-desktop max-w-container-max mx-auto mb-12">
        <form method="GET" action="{{ route('cars.index') }}" class="flex flex-wrap items-center gap-6 p-6 glass-panel rounded-xl">
            <div class="flex flex-col gap-2">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-widest">Brand Selection</span>
                <div class="flex flex-wrap gap-2">
                    <button type="submit" name="brand" value=""
                        class="px-4 py-2 {{ !request('brand') ? 'bg-primary text-on-primary' : 'bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant' }} font-bold rounded-lg text-label-sm transition-all duration-300">
                        All Brands
                    </button>
                    @foreach($brands as $brand)
                    <button type="submit" name="brand" value="{{ $brand->id }}"
                        class="px-4 py-2 {{ request('brand') == $brand->id ? 'bg-primary text-on-primary font-bold' : 'bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant' }} rounded-lg text-label-sm transition-all duration-300">
                        {{ $brand->name }}
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="h-12 w-[1px] bg-outline-variant/30 hidden md:block"></div>
            <div class="flex flex-col gap-2">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-widest">Status</span>
                <div class="flex flex-wrap gap-2">
                    <button type="submit" name="status" value=""
                        class="px-4 py-2 {{ !request('status') ? 'bg-primary text-on-primary' : 'bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant' }} font-bold rounded-lg text-label-sm transition-all duration-300">
                        Semua
                    </button>
                    <button type="submit" name="status" value="available"
                        class="px-4 py-2 {{ request('status') == 'available' ? 'bg-primary text-on-primary font-bold' : 'bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant' }} rounded-lg text-label-sm transition-all duration-300">
                        Tersedia
                    </button>
                    <button type="submit" name="status" value="sold"
                        class="px-4 py-2 {{ request('status') == 'sold' ? 'bg-primary text-on-primary font-bold' : 'bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant' }} rounded-lg text-label-sm transition-all duration-300">
                        Terjual
                    </button>
                </div>
            </div>
        </form>
    </section>

    <!-- Grid Inventory -->
    <section class="px-margin-desktop max-w-container-max mx-auto">
        @if($cars->isEmpty())
        <div class="glass-panel rounded-xl p-16 text-center text-on-surface-variant">
            Tidak ada mobil yang sesuai dengan filter ini.
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            @foreach($cars as $car)
            <div class="tilt-card group relative overflow-hidden bg-surface-container-low rounded-xl border border-outline-variant/20 h-full flex flex-col">
                <div class="relative h-64 overflow-hidden z-10">
                    <img
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        alt="{{ $car->name }}"
                        src="{{ Storage::url($car->image) }}" />
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-surface-container-high/80 backdrop-blur-md px-3 py-1 text-label-sm font-label-sm uppercase rounded">{{ $car->brand->name }}</span>
                        @if($car->status === 'sold')
                        <span class="bg-metallic-start px-3 py-1 text-label-sm font-label-sm text-white uppercase rounded">Terjual</span>
                        @endif
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-grow relative z-10">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-headline-md text-headline-md tracking-tight uppercase">{{ $car->name }}</h3>
                        <span class="text-metallic-start font-bold">{{ $car->year }}</span>
                    </div>
                    <p class="text-on-surface-variant mb-6 font-body-md">{{ Str::limit($car->description, 60) }}</p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex flex-col">
                            <span class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Transmisi</span>
                            <span class="font-body-md font-semibold">{{ $car->transmission ?? '—' }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-outline font-label-sm text-[10px] uppercase tracking-tighter">Kilometer</span>
                            <span class="font-body-md font-semibold">{{ $car->mileage ? number_format($car->mileage,0,',','.') . ' km' : '—' }}</span>
                        </div>
                    </div>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-outline font-label-sm text-[10px] uppercase">Starting At</span>
                            <span class="text-primary font-bold text-headline-md">{{ $car->price_formatted }}</span>
                        </div>
                        <a href="{{ route('cars.show', $car->slug) }}"
                            class="material-symbols-outlined text-primary bg-surface-container-highest p-3 rounded-full hover:bg-metallic-start transition-colors">
                            arrow_forward
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-16 flex justify-center [&_a]:text-on-surface-variant [&_span]:text-on-surface-variant">
            {{ $cars->withQueryString()->links() }}
        </div>
        @endif
    </section>
</main>
@endsection