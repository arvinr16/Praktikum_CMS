{{--
  FILE INI ADALAH: admin.categories.edit.blade.php
  FUNGSI: Form untuk MENGEDIT kategori yang sudah ada (UPDATE)
  DIPANGGIL OLEH: CategoryController@edit, submit ke CategoryController@update
  LOKASI: resources/views/admin/categories/edit.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Edit Kategori')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten / Categories</div>
    <h1 class="font-display font-bold text-2xl text-primary">Edit Kategori: {{ $category->name }}</h1>
</div>

<div class="admin-card p-6 max-w-xl">
    <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="admin-label">Nama Kategori</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}" class="admin-input">
            <p class="text-[11px] text-outline mt-1.5">Slug saat ini: <span class="font-mono">{{ $category->slug }}</span> (akan diperbarui otomatis)</p>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Update Kategori
            </button>
            <a href="{{ route('admin.categories.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection