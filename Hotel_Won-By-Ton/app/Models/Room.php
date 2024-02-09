<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'HotelID',
        'Capacity',
        'RoomType',
        'PricePerNight',
        'Availability',
        'Price',
        'RoomID'
    ];
}
