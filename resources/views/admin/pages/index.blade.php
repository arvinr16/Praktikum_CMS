{{--
  FILE INI ADALAH: admin.pages.index.blade.php
  FUNGSI: Menampilkan tabel/daftar semua Halaman Statis (READ) — About, Privacy, dll
  DIPANGGIL OLEH: PageController@index (Admin)
  LOKASI: resources/views/admin/pages/index.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Pages')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten</div>
        <h1 class="font-display font-bold text-2xl text-primary">Halaman Statis</h1>
    </div>
    <a href="{{ route('admin.pages.create') }}" class="btn-metallic px-5 py-2.5 rounded-lg text-sm font-bold text-white flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Tambah Halaman
    </a>
</div>

<div class="admin-card overflow-hidden">
    <table class="admin-table w-full">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Slug (URL)</th>
                <th>Terakhir Diubah</th>
                <th class="text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td><span class="font-mono text-xs text-on-surface-var">/pages/{{ $page->slug }}</span></td>
                <td><span class="font-mono text-xs text-outline">{{ $page->updated_at->format('d M Y') }}</span></td>
                <td class="text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('pages.show', $page->slug) }}" target="_blank" class="btn-edit">Lihat</a>
                        <a href="{{ route('admin.pages.edit', $page) }}" class="btn-edit">Edit</a>
                        <button
                            type="button"
                            class="btn-danger"
                            data-url="{{ route('admin.pages.destroy', $page) }}"
                            data-message='Hapus halaman "{{ $page->title }}"? Tindakan ini tidak dapat dibatalkan.'
                            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-10 text-outline text-sm">
                    Belum ada halaman statis. Klik "Tambah Halaman" untuk menambahkan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($pages->hasPages())
<div class="mt-5 pagination">
    {{ $pages->links() }}
</div>
@endif

@endsection