<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendrive extends Model
{
    // use HasFactory;
    protected $fillable = [
        'pendrive',
        'activation',
        'validity',
        'remaining',
        'validityapp',
        'defaultpass',
        'installpname',
    ];
}
