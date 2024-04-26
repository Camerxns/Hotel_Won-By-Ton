<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class RewardsController extends Controller
{
    public function index()
    {
        
        $user = auth()->user(); 
        
        if ($user) {
           
            $points = $user->points;
            
            
            return view('showPoints', compact('points')); 
        } else {
          
            return redirect()->route('login')->with('error', 'Please log in to view your points.');
        }
    }

    public function deductPoints(Request $request){
        $user = auth()->user();

        

        if ($user){
            $deductedPoints = $request->deductPoints;
            $user->points -= $deductedPoints;
            
            return response()->json(['success' => true]);
        }
    }


}
