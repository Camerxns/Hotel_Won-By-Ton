<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller{
    public function showBookingForm(){
    if(Auth::user()->AccessLevel === 'User' || 'Manager' || 'Admin'){
        $rooms = Room::all();
        return view('booking', compact('rooms'), ['rooms'=>$rooms]);
    }
}

    public function showPayment(){
        return view('payment'); 
    }
}
