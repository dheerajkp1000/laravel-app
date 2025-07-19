<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // ✅ Allowed fields for mass assignment
    protected $fillable = [
        'name',
        'email',
        'department',
    ];
}
