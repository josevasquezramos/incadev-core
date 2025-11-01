<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditAction extends Model
{
    protected $fillable = [
        'audit_finding_id',
        'responsible_id',
        'action_required',
        'due_date',
        'status',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function auditFinding(): BelongsTo
    {
        return $this->belongsTo(AuditFinding::class);
    }

    public function responsible(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'responsible_id');
    }
}
