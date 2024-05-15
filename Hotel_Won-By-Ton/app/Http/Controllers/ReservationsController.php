<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ReservationsController extends Controller
{
  
    public function store(Request $request)
    {
     Reservation::create($request->all());
     $user = Auth::user();
     $user -> points =0;
     $user->points +=100;
     $user->save();
     $room = Room::findOrFail($request->input('RoomID'));
     $room->Availability = 'Unavailable';
     $room->save();
    
     return redirect()->back()->with('success', 'Room booked successfully');
    }
    public function show(Request $request)
{
    
    $user = Auth::user(); 
    $reservations = Reservation::where('id', $user->id)->get();
  

    return view('showReservations', ['reservations' => $reservations]);
}

    public function destroy(String $id, Request $request){
        $reservationToDelete = Reservation::find($id);

        if ($reservationToDelete) {
            $room = Room::find($reservationToDelete->RoomID);
            if ($room) {
                $room->Availability = 'Available';
                $room->save();
            }
            $reservationToDelete->delete();
            return redirect()->back();
        } else {
            return response()->json(['error' => 'Record not found'], 404);
        }


    }
    
    
     
  
}
