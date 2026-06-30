@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard Overview')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Cars -->
    <div class="admin-card p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-lg bg-metallic-start/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-metallic-start text-[24px]">directions_car</span>
            </div>
            <span class="font-mono text-xs text-outline">Total Units</span>
        </div>
        <div class="text-3xl font-display font-bold text-primary mb-1">{{ $totalCars ?? 0 }}</div>
        <div class="text-xs text-on-surface-var">Mobil dalam katalog</div>
    </div>

    <!-- Available Cars -->
    <div class="admin-card p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-lg bg-green-500/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-green-500 text-[24px]">check_circle</span>
            </div>
            <span class="font-mono text-xs text-outline">Tersedia</span>
        </div>
        <div class="text-3xl font-display font-bold text-primary mb-1">{{ $availableCars ?? 0 }}</div>
        <div class="text-xs text-on-surface-var">Unit siap jual</div>
    </div>

    <!-- Sold Cars -->
    <div class="admin-card p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-lg bg-red-500/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-red-500 text-[24px]">sell</span>
            </div>
            <span class="font-mono text-xs text-outline">Terjual</span>
        </div>
        <div class="text-3xl font-display font-bold text-primary mb-1">{{ $soldCars ?? 0 }}</div>
        <div class="text-xs text-on-surface-var">Unit terjual</div>
    </div>

    <!-- Unread Messages -->
    <div class="admin-card p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-blue-500 text-[24px]">mail</span>
            </div>
            <span class="font-mono text-xs text-outline">Pesan Baru</span>
        </div>
        <div class="text-3xl font-display font-bold text-primary mb-1">{{ $unreadMessages ?? 0 }}</div>
        <div class="text-xs text-on-surface-var">Pesan belum dibaca</div>
    </div>
</div>

<!-- Quick Actions & Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Quick Actions -->
    <div class="lg:col-span-1">
        <div class="admin-card p-6">
            <h3 class="font-display font-semibold text-lg text-primary mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <a href="{{ route('admin.cars.create') }}" class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-metallic-start/10 flex items-center justify-center group-hover:bg-metallic-start/20">
                        <span class="material-symbols-outlined text-metallic-start text-[20px]">add</span>
                    </div>
                    <div class="flex-1">
                        <div class="text-sm font-medium text-primary">Tambah Mobil Baru</div>
                        <div class="text-xs text-on-surface-var">Tambahkan unit ke katalog</div>
                    </div>
                    <span class="material-symbols-outlined text-outline">arrow_forward</span>
                </a>

                <a href="{{ route('admin.brands.create') }}" class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-metallic-start/10 flex items-center justify-center group-hover:bg-metallic-start/20">
                        <span class="material-symbols-outlined text-metallic-start text-[20px]">branding_watermark</span>
                    </div>
                    <div class="flex-1">
                        <div class="text-sm font-medium text-primary">Tambah Brand</div>
                        <div class="text-xs text-on-surface-var">Tambah merek mobil baru</div>
                    </div>
                    <span class="material-symbols-outlined text-outline">arrow_forward</span>
                </a>

                <a href="{{ route('admin.articles.create') }}" class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-metallic-start/10 flex items-center justify-center group-hover:bg-metallic-start/20">
                        <span class="material-symbols-outlined text-metallic-start text-[20px]">article</span>
                    </div>
                    <div class="flex-1">
                        <div class="text-sm font-medium text-primary">Tulis Artikel</div>
                        <div class="text-xs text-on-surface-var">Publikasi konten baru</div>
                    </div>
                    <span class="material-symbols-outlined text-outline">arrow_forward</span>
                </a>

                <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-metallic-start/10 flex items-center justify-center group-hover:bg-metallic-start/20">
                        <span class="material-symbols-outlined text-metallic-start text-[20px]">mail</span>
                    </div>
                    <div class="flex-1">
                        <div class="text-sm font-medium text-primary">Lihat Pesan Masuk</div>
                        <div class="text-xs text-on-surface-var">Kelola inquiry pelanggan</div>
                    </div>
                    <span class="material-symbols-outlined text-outline">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Cars -->
    <div class="lg:col-span-2">
        <div class="admin-card p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-display font-semibold text-lg text-primary">Mobil Terbaru</h3>
                <a href="{{ route('admin.cars.index') }}" class="text-xs text-metallic-start hover:text-primary transition-colors flex items-center gap-1">
                    Lihat Semua
                    <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                </a>
            </div>
            
            @if(isset($recentCars) && $recentCars->count() > 0)
            <div class="space-y-3">
                @foreach($recentCars as $car)
                <div class="flex items-center gap-4 p-3 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors">
                    <img src="{{ $car->image ? Storage::url($car->image) : 'https://via.placeholder.com/80x60' }}" 
                         alt="{{ $car->name }}" 
                         class="w-20 h-14 rounded-lg object-cover border border-outline-variant/20">
                    <div class="flex-1 min-w-0">
                        <div class="text-sm font-medium text-primary truncate">{{ $car->name }}</div>
                        <div class="text-xs text-on-surface-var">{{ $car->brand->name }} • {{ $car->year }}</div>
                        <div class="text-xs text-metallic-start font-mono mt-1">{{ $car->price_formatted }}</div>
                    </div>
                    <span class="badge-{{ $car->status }} text-[10px] font-mono px-3 py-1 rounded-full">
                        {{ $car->status_label }}
                    </span>
                    <a href="{{ route('admin.cars.edit', $car) }}" class="btn-edit ml-2">Edit</a>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-12 text-outline">
                <span class="material-symbols-outlined text-4xl mb-3">directions_car</span>
                <p class="text-sm mb-3">Belum ada mobil dalam katalog.</p>
                <a href="{{ route('admin.cars.create') }}" class="btn-metallic inline-block px-6 py-2 text-sm">
                    + Tambah Mobil Pertama
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection