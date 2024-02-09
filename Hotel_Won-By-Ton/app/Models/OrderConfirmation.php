<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConfirmation extends Model
{
    use HasFactory;
    protected $fillable = [
        'ConfirmationID',
        'ReservationID',
        'UserID',
        'OrderNumber',
        'PriceID',
        'RoomID',
        'PaymentStatus'
    ];
}
