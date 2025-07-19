<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrudApp extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'status'];
}
