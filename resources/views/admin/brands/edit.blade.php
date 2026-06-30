{{--
  FILE INI ADALAH: admin.brands.edit.blade.php
  FUNGSI: Form untuk MENGEDIT brand yang sudah ada (UPDATE - bagian "U" dari CRUD)
  DIPANGGIL OLEH: BrandController@edit (tampilkan form terisi), submit ke BrandController@update
  LOKASI: resources/views/admin/brands/edit.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Edit Brand')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Katalog / Brands</div>
    <h1 class="font-display font-bold text-2xl text-primary">Edit Brand: {{ $brand->name }}</h1>
</div>

<div class="admin-card p-6 max-w-2xl">
    <form action="{{ route('admin.brands.update', $brand) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="admin-label">Nama Brand</label>
            <input type="text" name="name" value="{{ old('name', $brand->name) }}"
                class="admin-input">
        </div>

        <div>
            <label class="admin-label">Logo Brand</label>

            @if($brand->logo)
            <div class="flex items-center gap-3 mb-3">
                <img src="{{ Storage::url($brand->logo) }}" alt="{{ $brand->name }}" class="w-16 h-16 rounded-lg object-cover border border-white/10">
                <span class="text-xs text-outline">Logo saat ini</span>
            </div>
            @endif

            <input type="file" name="logo" accept="image/*"
                class="admin-input file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:bg-surface-high file:text-on-surface-var file:text-xs">
            <p class="text-[11px] text-outline mt-1.5">Kosongkan jika tidak ingin mengganti logo. Format: JPG, PNG, WEBP. Maks 1MB.</p>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Update Brand
            </button>
            <a href="{{ route('admin.brands.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection