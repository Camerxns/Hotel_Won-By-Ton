<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->validate([
            'Email'=>'required|email',
            'Password'=>'required'
        ]);
        
        $existingUser = User::where('Email', $user['Email'])->first();

        if(!$existingUser){
            echo 'Error: User Not Found!';
            error_log('Error');
        }
        if ($existingUser){
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
