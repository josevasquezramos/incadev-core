<?php

namespace Incadev\Core\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Incadev\Core\Models\SurveyResponse;

trait CanBeRated
{
    public function ratings(): MorphMany
    {
        return $this->morphMany(SurveyResponse::class, 'rateable');
    }
}
