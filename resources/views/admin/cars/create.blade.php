{{--
  FILE INI ADALAH: admin.cars.create.blade.php
  FUNGSI: Form untuk MENAMBAH mobil baru (CREATE)
  DIPANGGIL OLEH: CarController@create (Admin), submit ke CarController@store
  LOKASI: resources/views/admin/cars/create.blade.php
--}}
@extends('admin.layouts.app')
@section('title', 'Tambah Mobil')

@section('content')

<div class="mb-6">
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">Katalog / Cars</div>
    <h1 class="font-display font-bold text-2xl text-primary">Tambah Mobil Baru</h1>
</div>

<div class="admin-card p-6 max-w-3xl">
    <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="admin-label">Merek (Brand)</label>
                <select name="brand_id" class="admin-input">
                    <option value="">-- Pilih Merek --</option>
                    @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="admin-label">Nama Mobil</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Alphard HEV" class="admin-input">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div>
                <label class="admin-label">Harga (Rp)</label>
                <input type="number" name="price" value="{{ old('price') }}" placeholder="450000000" class="admin-input">
            </div>
            <div>
                <label class="admin-label">Tahun</label>
                <input type="number" name="year" value="{{ old('year', date('Y')) }}" min="1990" max="{{ date('Y') }}" class="admin-input">
            </div>
            <div>
                <label class="admin-label">Status</label>
                <select name="status" class="admin-input">
                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Tersedia</option>
                    <option value="sold" {{ old('status') == 'sold' ? 'selected' : '' }}>Terjual</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="admin-label">Transmisi (opsional)</label>
                <select name="transmission" class="admin-input">
                    <option value="">-- Pilih --</option>
                    <option value="Manual" {{ old('transmission') == 'Manual' ? 'selected' : '' }}>Manual</option>
                    <option value="Matic" {{ old('transmission') == 'Matic' ? 'selected' : '' }}>Matic</option>
                </select>
            </div>
            <div>
                <label class="admin-label">Kilometer (opsional)</label>
                <input type="number" name="mileage" value="{{ old('mileage') }}" min="0" placeholder="15000" class="admin-input">
            </div>
        </div>

        <div>
            <label class="admin-label">Foto Mobil</label>
            <input type="file" name="image" accept="image/*"
                class="admin-input file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:bg-surface-high file:text-on-surface-var file:text-xs">
            <p class="text-[11px] text-outline mt-1.5">Format: JPG, PNG, WEBP. Maks 2MB.</p>
        </div>

        <div>
            <label class="admin-label">Deskripsi</label>
            <textarea name="description" rows="5" placeholder="Deskripsikan kondisi, fitur unggulan, dan detail mobil..."
                class="admin-input">{{ old('description') }}</textarea>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="btn-metallic px-6 py-2.5 rounded-lg text-sm font-bold text-white">
                Simpan Mobil
            </button>
            <a href="{{ route('admin.cars.index') }}" class="btn-ghost px-6 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection