<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "room_id",
        "check_in",
        "check_out",
        "total",
        "amount",
        "customer_id",
    ] ;
}
