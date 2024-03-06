<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class managerAddAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = new Room();
        $room->RoomName = $request->RoomName;
        $room->Capacity = $request->Capacity;
        $room->RoomType = $request->RoomType;
        $room->Price = $request->Price;
        $room->Discount = $request->input('Discount', 0);
        $room->Availability = $request->Availability;
        $room->Image = $request->Image;
        $room->Description = $request->Description;
        $room->save();

        return redirect()->back()->with('success', 'Room added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $roomId = $request->input('RoomID');
        $room = Room::where('RoomID', $roomId)->first();
    
        if (!$room) {
            return redirect("/dashboard")->with('error', 'Room not found');
        }
    
        $room->delete();
    
        return redirect("/dashboard")->with('success', 'Room deleted successfully');
    }
}
