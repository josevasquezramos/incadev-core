<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Incadev\Core\Traits\CanBeAudited;
use Incadev\Core\Traits\CanBeRated;

class Course extends Model
{
    use CanBeAudited, CanBeRated;

    protected $fillable = [
        'name',
        'description',
        'image_path',
    ];

    public function versions(): HasMany
    {
        return $this->hasMany(CourseVersion::class);
    }
}
