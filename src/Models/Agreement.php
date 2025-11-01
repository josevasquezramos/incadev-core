<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agreement extends Model
{
    protected $fillable = [
        'organization_id',
        'name',
        'start_date',
        'renewal_date',
        'purpose',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'renewal_date' => 'date',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
