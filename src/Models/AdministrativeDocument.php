<?php

namespace Incadev\Core\Models;

use Illuminate\Database\Eloquent\Model;

class AdministrativeDocument extends Model
{
    protected $fillable = [
        'name',
        'type',
        'path',
        'description',
    ];
}
