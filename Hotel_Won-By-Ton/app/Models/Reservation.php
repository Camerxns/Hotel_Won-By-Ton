<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'ReservationID',
        'ConfirmationID',
        'id',
        'RoomID',
        'CheckinDate',
        'CheckoutDate',
        'Price',
        'Status',
        'CreditCard',
        'ExpirationDate',
        'CVV'
    ];
}
