<?php

namespace Incadev\Core\Traits;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Incadev\Core\Models\StudentProfile;
use Incadev\Core\Models\SupportProfile;
use Incadev\Core\Models\TeacherProfile;

trait HasIncadevCore
{
    public function studentProfile(): HasOne
    {
        return $this->hasOne(StudentProfile::class);
    }

    public function teacherProfile(): HasOne
    {
        return $this->hasOne(TeacherProfile::class);
    }

    public function supportProfile(): HasOne
    {
        return $this->hasOne(SupportProfile::class);
    }
}
