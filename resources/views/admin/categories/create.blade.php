{{--
  FILE INI ADALAH: admin.categories.create.blade.php
  FUNGSI: Form untuk MENAMBAH kategori baru (CREATE)
  DIPANGGIL OLEH: CategoryController@create, submit ke CategoryController@store
  LOKASI: resources/views/admin/categories/create.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Tambah Kategori')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Konten / Categories</div>
    <h1 class="font-display font-bold text-2xl text-primary">Tambah Kategori Baru</h1>
</div>

<div class="admin-card p-6 max-w-xl">
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="admin-label">Nama Kategori</label>
            <input type="text" name="name" value="{{ old('name') }}"
                placeholder="Contoh: Technical Review"
                class="admin-input">
            <p class="text-[11px] text-outline mt-1.5">Slug akan dibuat otomatis dari nama kategori.</p>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Simpan Kategori
            </button>
            <a href="{{ route('admin.categories.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection