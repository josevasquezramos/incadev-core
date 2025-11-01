<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReplyAttachment extends Model
{
    protected $fillable = [
        'ticket_reply_id',
        'type',
        'path',
    ];

    public function ticketReply(): BelongsTo
    {
        return $this->belongsTo(TicketReply::class);
    }
}
