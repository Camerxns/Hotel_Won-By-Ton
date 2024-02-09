<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function dbConnect(){
        $serverName = "tcp:hotel1won.database.windows.net,1433";
        $connectionOptions = array("Database"=>"HotelWonByTon-database", "Uid"=>"azureuser", "PWD"=>"HotelWon!");
        
         //Establishes the connection
         $conn = sqlsrv_connect($serverName, $connectionOptions);

         $tsql = "SELECT * FROM users";
        //Executes the query
        $getProducts = sqlsrv_query($conn, $tsql);

        $row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC);

        print_r($row);
    }
    
}
