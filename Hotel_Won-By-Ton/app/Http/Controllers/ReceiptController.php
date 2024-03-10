<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function show(Request $request)
    {
        // Retrieve data from the request (you can access query parameters using $request->input('parameterName'))
        $reservationId = $request->input('reservationId');
        $roomId = $request->input('roomId');
        $checkinDate = $request->input('checkinDate');
        $checkoutDate = $request->input('checkoutDate');
        $totalPrice = $request->input('totalPrice');
        $status = $request->input('status');
        $creditCard = $request->input('creditCard');

        // Pass the data to the view
        return view('receipt', compact('reservationId', 'roomId', 'checkinDate', 'checkoutDate', 'totalPrice', 'status', 'creditCard'));
    }
}
