{{--
  FILE INI ADALAH: admin.brands.create.blade.php
  FUNGSI: Form untuk MENAMBAH brand baru (CREATE - bagian "C" dari CRUD)
  DIPANGGIL OLEH: BrandController@create (tampilkan form), submit ke BrandController@store
  LOKASI: resources/views/admin/brands/create.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Tambah Brand')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Katalog / Brands</div>
    <h1 class="font-display font-bold text-2xl text-primary">Tambah Brand Baru</h1>
</div>

<div class="admin-card p-6 max-w-2xl">
    <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <div>
            <label class="admin-label">Nama Brand</label>
            <input type="text" name="name" value="{{ old('name') }}"
                placeholder="Contoh: Toyota"
                class="admin-input">
        </div>

        <div>
            <label class="admin-label">Logo Brand (opsional)</label>
            <input type="file" name="logo" accept="image/*"
                class="admin-input file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:bg-surface-high file:text-on-surface-var file:text-xs">
            <p class="text-[11px] text-outline mt-1.5">Format: JPG, PNG, WEBP. Maks 1MB.</p>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Simpan Brand
            </button>
            <a href="{{ route('admin.brands.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection