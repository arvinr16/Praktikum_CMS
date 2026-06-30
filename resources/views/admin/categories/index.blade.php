{{--
  FILE INI ADALAH: admin.categories.index.blade.php
  FUNGSI: Menampilkan tabel/daftar semua Kategori artikel (READ)
  DIPANGGIL OLEH: CategoryController@index
  LOKASI: resources/views/admin/categories/index.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Categories')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten</div>
        <h1 class="font-display font-bold text-2xl text-primary">Kategori Artikel</h1>
    </div>
    <a href="{{ route('admin.categories.create') }}" class="btn-metallic px-5 py-2.5 rounded-lg text-sm font-bold text-white flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Tambah Kategori
    </a>
</div>

<div class="admin-card overflow-hidden">
    <table class="admin-table w-full">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Jumlah Artikel</th>
                <th class="text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td class="font-mono text-xs text-outline">{{ $loop->iteration + ($categories->currentPage()-1) * $categories->perPage() }}</td>
                <td>{{ $category->name }}</td>
                <td><span class="font-mono text-xs text-on-surface-var">{{ $category->slug }}</span></td>
                <td><span class="font-mono text-xs text-on-surface-var">{{ $category->articles_count }} artikel</span></td>
                <td class="text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn-edit">Edit</a>
                        <button
                            type="button"
                            class="btn-danger"
                            data-url="{{ route('admin.categories.destroy', $category) }}"
                            data-message='Hapus kategori "{{ $category->name }}"? Tindakan ini tidak dapat dibatalkan.'
                            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-10 text-outline text-sm">
                    Belum ada data kategori. Klik "Tambah Kategori" untuk menambahkan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($categories->hasPages())
<div class="mt-5 pagination">
    {{ $categories->links() }}
</div>
@endif

@endsection