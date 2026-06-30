{{--
  FILE INI ADALAH: admin.brands.index.blade.php
  FUNGSI: Menampilkan tabel/daftar semua Brand (READ - bagian "R" dari CRUD)
  DIPANGGIL OLEH: BrandController@index
  LOKASI: resources/views/admin/brands/index.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Brands')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Katalog</div>
        <h1 class="font-display font-bold text-2xl text-primary">Brand Mobil</h1>
    </div>
    <a href="{{ route('admin.brands.create') }}" class="btn-metallic px-5 py-2.5 rounded-lg text-sm font-bold text-white flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Tambah Brand
    </a>
</div>

<div class="admin-card overflow-hidden">
    <table class="admin-table w-full">
        <thead>
            <tr>
                <th>#</th>
                <th>Logo</th>
                <th>Nama Brand</th>
                <th>Jumlah Mobil</th>
                <th class="text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($brands as $brand)
            <tr>
                <td class="font-mono text-xs text-outline">{{ $loop->iteration + ($brands->currentPage()-1) * $brands->perPage() }}</td>
                <td>
                    @if($brand->logo)
                    <img src="{{ Storage::url($brand->logo) }}" alt="{{ $brand->name }}" class="w-10 h-10 rounded-lg object-cover border border-white/10">
                    @else
                    <div class="w-10 h-10 rounded-lg bg-surface-high flex items-center justify-center">
                        <span class="material-symbols-outlined text-[16px] text-outline">image</span>
                    </div>
                    @endif
                </td>
                <td>{{ $brand->name }}</td>
                <td>
                    <span class="font-mono text-xs text-on-surface-var">{{ $brand->cars_count }} unit</span>
                </td>
                <td class="text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.brands.edit', $brand) }}" class="btn-edit">Edit</a>
                        <button
                            type="button"
                            class="btn-danger"
                            data-url="{{ route('admin.brands.destroy', $brand) }}"
                            data-message='Hapus brand "{{ $brand->name }}"? Tindakan ini tidak dapat dibatalkan.'
                            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-10 text-outline text-sm">
                    Belum ada data brand. Klik "Tambah Brand" untuk menambahkan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($brands->hasPages())
<div class="mt-5 pagination">
    {{ $brands->links() }}
</div>
@endif

@endsection