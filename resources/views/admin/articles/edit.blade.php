{{--
  FILE INI ADALAH: admin.articles.edit.blade.php
  FUNGSI: Form untuk MENGEDIT artikel yang sudah ada (UPDATE)
  DIPANGGIL OLEH: ArticleController@edit (Admin), submit ke ArticleController@update
  LOKASI: resources/views/admin/articles/edit.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Edit Artikel')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten / Articles</div>
    <h1 class="font-display font-bold text-2xl text-primary">Edit Artikel</h1>
</div>

<div class="admin-card p-6 max-w-3xl">
    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="admin-label">Kategori</label>
            <select name="category_id" class="admin-input">
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="admin-label">Judul Artikel</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}" class="admin-input">
        </div>

        <div>
            <label class="admin-label">Gambar Sampul</label>

            <div class="flex items-center gap-3 mb-3">
                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-24 h-16 rounded-lg object-cover border border-white/10">
                <span class="text-xs text-outline">Gambar saat ini</span>
            </div>

            <input type="file" name="image" accept="image/*"
                class="admin-input file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:bg-surface-high file:text-on-surface-var file:text-xs">
            <p class="text-[11px] text-outline mt-1.5">Kosongkan jika tidak ingin mengganti gambar. Maks 2MB.</p>
        </div>

        <div>
            <label class="admin-label">Isi Artikel</label>
            <textarea name="content" rows="10" class="admin-input">{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Update Artikel
            </button>
            <a href="{{ route('admin.articles.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection