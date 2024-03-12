<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Signup_API extends Controller
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

    // THIS IS NOT BEING USED! DELETE AFTER VERIFYING THAT WE DONT NEED ANYTHING FROM HERE

    //  $request -> validate([
    //     'FirstName' =>'required',
    //     'LastName' =>'required',
    //     'Email' => 'required',
    //     'Password' => 'required',
    //     'AccessLevel'=>'required'
    //  ]);
     
    //  User::create($request->all());
    //  return redirect("/");
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
