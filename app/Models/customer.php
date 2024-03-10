<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'f_name',
        'l_name',
        'tel',
        'email',
        'identity_number'
    ] ;
}
