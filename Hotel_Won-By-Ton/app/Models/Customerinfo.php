<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customerinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'UserID',
        'CreditCard',
        'Address',
        'PhoneNo',
        'FirstName',
        'LastName',
        'MemberTeir',
        'RewardsPoints'
    ];
}
