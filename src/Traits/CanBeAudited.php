<?php

namespace Incadev\Core\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Incadev\Core\Models\Audit;

trait CanBeAudited
{
    public function audits(): MorphMany
    {
        return $this->morphMany(Audit::class, 'auditable');
    }
}
