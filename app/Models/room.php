<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'type',
        'price',
        'space',
        'image',
        'vibe',
        'maximum',
    ];
}
