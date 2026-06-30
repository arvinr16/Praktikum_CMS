{{--
  FILE INI ADALAH: admin.messages.show.blade.php
  FUNGSI: Menampilkan DETAIL satu pesan secara lengkap (READ - detail view)
  DIPANGGIL OLEH: MessageController@show
  LOKASI: resources/views/admin/messages/show.blade.php
  CATATAN: Saat halaman ini dibuka, MessageController@show otomatis
           menandai pesan sebagai sudah dibaca (is_read = true).
--}}
@extends('admin.layouts.app')
@section('title', 'Detail Pesan')

@section('content')

<div class="mb-6">
    <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-1.5 text-xs text-on-surface-var hover:text-primary transition-colors mb-3 w-fit">
        <span class="material-symbols-outlined text-[16px]">arrow_back</span>
        Kembali ke Daftar Pesan
    </a>
    <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">CRM / Messages</div>
    <h1 class="font-display font-bold text-2xl text-primary">Pesan dari {{ $message->name }}</h1>
</div>

<div class="admin-card p-6 max-w-2xl">

    <div class="flex items-center justify-between pb-5 mb-5 border-b border-white/5">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-surface-high flex items-center justify-center">
                <span class="material-symbols-outlined text-[18px] text-on-surface-var">person</span>
            </div>
            <div>
                <div class="font-display font-semibold text-sm text-primary">{{ $message->name }}</div>
                <div class="font-mono text-[11px] text-outline">{{ $message->created_at->format('d M Y, H:i') }} WIB</div>
            </div>
        </div>
        <span class="badge-read text-[10px] font-mono px-2 py-0.5 rounded-full">Dibaca</span>
    </div>

    <div class="space-y-4 mb-6">
        <div>
            <div class="admin-label">Email</div>
            <div class="text-sm text-primary">{{ $message->email }}</div>
        </div>

        @if($message->phone)
        <div>
            <div class="admin-label">No. WhatsApp / Telepon</div>
            <div class="text-sm text-primary font-mono">{{ $message->phone }}</div>
        </div>
        @endif

        <div>
            <div class="admin-label">Isi Pesan</div>
            <div class="text-sm text-on-surface-var leading-relaxed whitespace-pre-line bg-surface-mid rounded-lg p-4 mt-1.5">
                {{ $message->message }}
            </div>
        </div>
    </div>

    <div class="flex gap-3 pt-4 border-t border-white/5">
        @if($message->phone)
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $message->phone) }}" target="_blank"
            class="btn-metallic px-5 py-2.5 rounded-lg text-sm font-bold text-white flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px]">chat</span>
            Balas via WhatsApp
        </a>
        @endif
        <a href="mailto:{{ $message->email }}"
            class="btn-ghost px-5 py-2.5 rounded-lg text-sm font-medium text-on-surface-var flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px]">mail</span>
            Balas via Email
        </a>
        <button
            type="button"
            class="btn-danger ml-auto"
            data-url="{{ route('admin.messages.destroy', $message) }}"
            data-message="Hapus pesan ini? Tindakan ini tidak dapat dibatalkan."
            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
            Hapus Pesan
        </button>
    </div>
</div>

@endsection