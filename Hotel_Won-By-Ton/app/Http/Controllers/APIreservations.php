<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APIreservations extends Controller
{
    public function store(Request $request){
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'username' => '',
            'lengthOfStay' => '',
            'location' => '',
            'creditCard' => '',
            'expiryDate' => '',
            'cvv' => '',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create a new reservation instance
        $reservation = new Reservation([
            'username' => $request->input('username'),
            'length_of_stay' => $request->input('lengthOfStay'),
            'location' => $request->input('location'),
            'credit_card' => $request->input('creditCard'),
            'expiry_date' => $request->input('expiryDate'),
            'cvv' => $request->input('cvv'),
        ]);

        // Save the reservation to the database
        $reservation->save();

        // Return a success response
        return response()->json(['message' => 'Reservation created successfully'], 201);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function destroy(string $id)
    {
       //
    }
}
