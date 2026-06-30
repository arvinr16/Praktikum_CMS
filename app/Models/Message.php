<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'is_read'
    ];

    // Cast boolean: $message->is_read => true/false (bukan 0/1)
    protected $casts = [
        'is_read'   => 'boolean'
    ];

    // Scope: Message::unread()->get()
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    // Scope: Message::read()->get()
    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }
}
