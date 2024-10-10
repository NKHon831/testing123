<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VehicleLocationController extends Controller
{
    public function getVehicleLocation(Request $request)
    {
        $vehicle = null;
        try{

            //only available for local
            $response = Http::get('localhost:8080/vehicle/location');
            $vehicle = json_decode($response);
        }catch(Exception $e){
            Log::error('Unable to fetch vehicle details');
        }
        Log::info('vehicle: ', ['vehicle' => $vehicle]);
        return view('vehicleLocation',['vehicle' => $vehicle]);
    }
}
