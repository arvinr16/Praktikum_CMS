{{--
  FILE INI ADALAH: admin.articles.index.blade.php
  FUNGSI: Menampilkan tabel/daftar semua Artikel (READ)
  DIPANGGIL OLEH: ArticleController@index (Admin)
  LOKASI: resources/views/admin/articles/index.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Articles')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten</div>
        <h1 class="font-display font-bold text-2xl text-primary">Artikel</h1>
    </div>
    <a href="{{ route('admin.articles.create') }}" class="btn-metallic px-5 py-2.5 rounded-lg text-sm font-bold text-white flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Tambah Artikel
    </a>
</div>

<div class="admin-card overflow-hidden">
    <table class="admin-table w-full">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th class="text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($articles as $article)
            <tr>
                <td>
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-14 h-10 rounded-md object-cover border border-white/10">
                </td>
                <td class="max-w-[280px] truncate">{{ $article->title }}</td>
                <td><span class="font-mono text-xs text-on-surface-var">{{ $article->category->name }}</span></td>
                <td><span class="font-mono text-xs text-outline">{{ $article->created_at->format('d M Y') }}</span></td>
                <td class="text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.articles.edit', $article) }}" class="btn-edit">Edit</a>
                        <button
                            type="button"
                            class="btn-danger"
                            data-url="{{ route('admin.articles.destroy', $article) }}"
                            data-message='Hapus artikel "{{ $article->title }}"? Tindakan ini tidak dapat dibatalkan.'
                            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-10 text-outline text-sm">
                    Belum ada data artikel. Klik "Tambah Artikel" untuk menambahkan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($articles->hasPages())
<div class="mt-5 pagination">
    {{ $articles->links() }}
</div>
@endif

@endsection