<?php

namespace App\Http\Controllers;

use App\Models\HotelManager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminDashboardAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataList = HotelManager::all();
        return view('adminDashboard', ['dataList'=>$dataList]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
{
    User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'AccessLevel' => $request->input('AccessLevel')
    ]);

    $hotelManager = HotelManager::find($id);
    if ($hotelManager) {
        $hotelManager->delete();
        return response()->json(['message' => 'Data added and deleted successfully'], 200);
    } else {
        return response()->json(['error' => 'Hotel Manager record not found'], 404);
    }
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
        $recordToDelete = HotelManager::find($id);
        if ($recordToDelete) {
            $recordToDelete->delete();
            return response()->json(['message' => 'Data deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Record not found'], 404);
        }
    }
}
