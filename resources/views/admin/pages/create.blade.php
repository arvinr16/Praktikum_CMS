{{--
  FILE INI ADALAH: admin.pages.create.blade.php
  FUNGSI: Form untuk MENAMBAH halaman statis baru (CREATE) — About, Privacy Policy, dll
  DIPANGGIL OLEH: PageController@create (Admin), submit ke PageController@store
  LOKASI: resources/views/admin/pages/create.blade.php
  CATATAN: Slug diisi MANUAL oleh admin (bukan otomatis) agar URL bisa diprediksi,
           contoh slug 'about-us' untuk menu "About" di navbar.
--}}
@extends('admin.layouts.app')
@section('title', 'Tambah Halaman')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten / Pages</div>
    <h1 class="font-display font-bold text-2xl text-primary">Tambah Halaman Baru</h1>
</div>

<div class="admin-card p-6 max-w-3xl">
    <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <div>
            <label class="admin-label">Judul Halaman</label>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Contoh: About Us" class="admin-input">
        </div>

        <div>
            <label class="admin-label">Slug (URL)</label>
            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="about-us" class="admin-input font-mono">
            <p class="text-[11px] text-outline mt-1.5">
                Hanya huruf kecil, angka, dan tanda hubung (-). Contoh: <span class="font-mono">about-us</span>, <span class="font-mono">privacy-policy</span>.
                URL akan menjadi: <span class="font-mono text-on-surface-var">/pages/[slug]</span>
            </p>
        </div>

        <div>
            <label class="admin-label">Gambar Sampul (opsional)</label>
            <input type="file" name="image" accept="image/*"
                class="admin-input file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:bg-surface-high file:text-on-surface-var file:text-xs">
            <p class="text-[11px] text-outline mt-1.5">Format: JPG, PNG, WEBP. Maks 2MB.</p>
        </div>

        <div>
            <label class="admin-label">Isi Halaman</label>
            <textarea name="content" rows="10" placeholder="Tulis konten halaman..."
                class="admin-input">{{ old('content') }}</textarea>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Simpan Halaman
            </button>
            <a href="{{ route('admin.pages.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection