<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class users extends Controller
{
    function view(){

        // THIS IS NOT BEING USED. DELETE AFTER VERIFICATION THAT WE DONT NEED ANYTHING FROM HERE
        
        // $users = User::all();

        // foreach ($users as $user) {
        //     echo "UserID: " . $user->UserID . ", FirstName: " . $user->FirstName . ", LastName: " . $user->LastName . ", Email: " . $user->Email . ", AccessLevel: " . $user->AccessLevel . "<br>";
        // }
    }
    
}
