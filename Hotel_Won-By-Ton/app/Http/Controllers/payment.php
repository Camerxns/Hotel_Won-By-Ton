<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
class payment extends Controller
{
    public function showBookingForm()
{
    $rooms = Room::all();
    return view('booking', compact('rooms'), array('rooms' => $rooms));
}
}
