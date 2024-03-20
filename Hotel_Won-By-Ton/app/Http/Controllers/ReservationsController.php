<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function store(Request $request)
    {
    //       $request -> validate([
    //     'ReservationID' =>'required',
    //     'RoomID' =>'required',
    //     'CheckinDate' => 'required',
    //     'CheckoutDate' => 'required',
    //     'Price'=>'required',
    //     'status'=>'required',
    //     'ConfirmationID'=>'required',
    //     'CreditCard'=>'required',
    //     'ExpirationDate'=>'required'
    //  ]);
     
     Reservation::create($request->all());
     return redirect("/receipt");
    }
}
