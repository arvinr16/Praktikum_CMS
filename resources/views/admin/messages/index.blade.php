{{--
  FILE INI ADALAH: admin.messages.index.blade.php
  FUNGSI: Menampilkan tabel/daftar semua Pesan dari form kontak (READ)
  DIPANGGIL OLEH: MessageController@index
  LOKASI: resources/views/admin/messages/index.blade.php
  CATATAN: Message tidak punya create/edit — hanya index, show, destroy, markRead
           karena pesan dibuat oleh PENGUNJUNG, bukan admin.
--}}
@extends('admin.layouts.app')
@section('title', 'Messages')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="font-mono text-[11px] text-outline tracking-widest uppercase mb-1">CRM</div>
        <h1 class="font-display font-bold text-2xl text-primary">Pesan Masuk</h1>
    </div>
    @if($unreadCount > 0)
    <span class="badge-unread text-xs font-mono px-3 py-1.5 rounded-full">
        {{ $unreadCount }} pesan belum dibaca
    </span>
    @endif
</div>

<div class="admin-card overflow-hidden">
    <table class="admin-table w-full">
        <thead>
            <tr>
                <th>Status</th>
                <th>Pengirim</th>
                <th>Kontak</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th class="text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
            <tr class="{{ !$message->is_read ? 'bg-white/[0.02]' : '' }}">
                <td>
                    <span class="{{ $message->is_read ? 'badge-read' : 'badge-unread' }} text-[10px] font-mono px-2 py-0.5 rounded-full">
                        {{ $message->is_read ? 'Dibaca' : 'Baru' }}
                    </span>
                </td>
                <td>{{ $message->name }}</td>
                <td>
                    <div class="text-xs">{{ $message->email }}</div>
                    @if($message->phone)
                    <div class="font-mono text-[11px] text-outline">{{ $message->phone }}</div>
                    @endif
                </td>
                <td class="max-w-[220px] truncate text-on-surface-var">{{ Str::limit($message->message, 50) }}</td>
                <td><span class="font-mono text-xs text-outline">{{ $message->created_at->format('d M Y, H:i') }}</span></td>
                <td class="text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.messages.show', $message) }}" class="btn-edit">Lihat</a>
                        <button
                            type="button"
                            class="btn-danger"
                            data-url="{{ route('admin.messages.destroy', $message) }}"
                            data-message='Hapus pesan dari "{{ $message->name }}"? Tindakan ini tidak dapat dibatalkan.'
                            onclick="confirmDelete(this.dataset.url, this.dataset.message)">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center py-10 text-outline text-sm">
                    Belum ada pesan masuk dari pengunjung.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($messages->hasPages())
<div class="mt-5 pagination">
    {{ $messages->links() }}
</div>
@endif

@endsection