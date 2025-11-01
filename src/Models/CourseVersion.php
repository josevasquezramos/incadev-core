<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Incadev\Core\Traits\CanBeAudited;
use Incadev\Core\Traits\CanBeRated;

class CourseVersion extends Model
{
    use CanBeAudited, CanBeRated;

    protected $fillable = [
        'course_id',
        'version',
        'name',
        'price',
        'status',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }
}
