{{--
  FILE INI ADALAH: admin.cars.index.blade.php
  FUNGSI: Menampilkan tabel/daftar semua Mobil (READ)
  DIPANGGIL OLEH: CarController@index (Admin)
  LOKASI: resources/views/admin/cars/index.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Cars')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Katalog</div>
        <h1 class="font-display font-bold text-2xl text-primary">Daftar Mobil</h1>
    </div>
    <a href="{{ route('admin.cars.create') }}" class="btn-metallic px-5 py-2.5 rounded-lg text-sm font-bold text-white flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Tambah Mobil
    </a>
</div>

<div class="admin-card overflow-hidden">
    <table class="admin-table w-full">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama Mobil</th>
                <th>Brand</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Status</th>
                <th class="text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cars as $car)
            <tr>
                <td>
                    <img src="{{ Storage::url($car->image) }}" alt="{{ $car->name }}" class="w-14 h-10 rounded-md object-cover border border-white/10">
                </td>
                <td>{{ $car->name }}</td>
                <td>
                    <span class="font-mono text-xs text-on-surface-var">{{ $car->brand->name }}</span>
                </td>
                <td><span class="font-mono text-xs">{{ $car->year }}</span></td>
                <td><span class="font-mono text-xs">{{ $car->price_formatted }}</span></td>
                <td>
                    <span class="badge-{{ $car->status }} text-[10px] font-mono px-2 py-0.5 rounded-full">
                        {{ $car->status_label }}
                    </span>
                </td>
                <td class="text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.cars.edit', $car) }}" class="btn-edit">Edit</a>
                        <button
                            type="button"
                            class="btn-danger"
                            data-url="{{ route('admin.cars.destroy', $car) }}"
                            data-message='Hapus mobil "{{ $car->name }}"? Tindakan ini tidak dapat dibatalkan.'
                            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center py-10 text-outline text-sm">
                    Belum ada data mobil. Klik "Tambah Mobil" untuk menambahkan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($cars->hasPages())
<div class="mt-5 pagination">
    {{ $cars->links() }}
</div>
@endif

@endsection