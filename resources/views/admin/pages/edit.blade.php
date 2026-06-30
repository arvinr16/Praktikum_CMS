@extends('admin.layouts.app')
@section('title', 'Edit Halaman')
@section('page-title', 'Edit Halaman')

@section('content')
<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten / Pages</div>
    <h1 class="font-display font-bold text-2xl text-primary">Edit Halaman: {{ $page->title }}</h1>
</div>

<div class="admin-card p-6 max-w-3xl">
    @if($errors->any())
    <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 text-sm">
        <ul class="list-disc list-inside space-y-1">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="admin-label">Judul Halaman</label>
            <input type="text" name="title" value="{{ old('title', $page->title) }}" class="admin-input" required>
        </div>

        <div>
            <label class="admin-label">Slug (URL)</label>
            <input type="text" name="slug" value="{{ old('slug', $page->slug) }}" class="admin-input font-mono" required>
            <p class="text-[11px] text-outline mt-1.5">
                Hanya huruf kecil, angka, dan tanda hubung (-). Contoh: about-us
            </p>
        </div>

        <div>
            <label class="admin-label">Gambar Sampul (opsional)</label>
            @if($page->image)
            <div class="mb-3">
                <img src="{{ Storage::url($page->image) }}" alt="{{ $page->title }}" class="w-32 h-20 rounded-lg object-cover border border-outline-variant/20 mb-2">
                <p class="text-xs text-on-surface-var">Gambar saat ini</p>
            </div>
            @endif
            <input type="file" name="image" accept="image/*" class="admin-input">
            <p class="text-[11px] text-outline mt-1.5">Kosongkan jika tidak ingin mengganti gambar. Maks 2MB.</p>
        </div>

        <div>
            <label class="admin-label">Isi Halaman</label>
            <textarea name="content" rows="10" class="admin-input" required>{{ old('content', $page->content) }}</textarea>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Update Halaman
            </button>
            <a href="{{ route('admin.pages.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection