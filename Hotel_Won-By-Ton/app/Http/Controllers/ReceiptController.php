<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function show(Request $request)
    {
        // Retrieve data from the request (you can access query parameters using $request->input('parameterName'))
        $reservationId = $request->input('ReservationID');
        $roomId = $request->input('RoomID');
        $checkinDate = $request->input('CheckinDate');
        $checkoutDate = $request->input('CheckoutDate');
        $totalPrice = $request->input('Price');
        $status = $request->input('Status');
        $creditCard = $request->input('CreditCard');
        $Expiration = $request->input('ExpirationDate');
        $CVV = $request->input('CVV');

        // Pass the data to the view
        return view('receipt', compact('reservationId', 'roomId', 'checkinDate', 'checkoutDate', 'totalPrice', 'status', 'creditCard','Expiration','CVV'));
    }
}
