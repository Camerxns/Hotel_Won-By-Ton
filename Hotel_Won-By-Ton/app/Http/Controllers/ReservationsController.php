<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationsController extends Controller
{
    public function store(Request $request)
    {
          $request -> validate([
        'ReservationID' =>'required',
        'RoomID' =>'required',
        'CheckinDate' => 'required',
        'CheckoutDate' => 'required',
        'Price'=>'required',
        'status'=>'required',
        'ConfirmationID'=>'required',
        'CreditCard'=>'required',
        'ExpirationDate'=>'required'
     ]);

     Reservation::create($request->all());
     return redirect()->back()->with('success', 'Room booked successfully');
    }
    public function show(Request $request)
{
    
    $user = Auth::user(); 
    $reservations = Reservation::where('id', $user->id)->get();
   

    return view('showReservations', ['reservations' => $reservations]);
}
}
