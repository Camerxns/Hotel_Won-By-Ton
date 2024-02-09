<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class users extends Controller
{
    function view(){
        
        $users = User::all();

        foreach ($users as $user) {
            echo "UserID: " . $user->UserID . ", FirstName: " . $user->FirstName . ", LastName: " . $user->LastName . ", Email: " . $user->Email . ", AccessLevel: " . $user->AccessLevel . "<br>";
        }
    }
    
}
