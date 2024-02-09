<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelManager extends Model
{
    use HasFactory;
    protected $fillable = [
        'UserID',
        'HotelID',
        'FirstName',
        'LastName',
        'Email'
    ];
}
