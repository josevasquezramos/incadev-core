<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Incadev\Core\Traits\CanBeAudited;
use Incadev\Core\Traits\CanBeRated;

class Appointment extends Model
{
    use CanBeAudited, CanBeRated;

    protected $fillable = [
        'teacher_id',
        'student_id',
        'start_time',
        'end_time',
        'status',
        'meet_url',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model', 'App\Models\User'), 'teacher_id');
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'student_id');
    }
}
