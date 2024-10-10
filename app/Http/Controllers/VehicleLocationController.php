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
            $baseURL = app()->environment('local') ? env('PUBLIC_TRANSPORT_LOCAL_BASE_URL') : env('PUBLIC_TRANSPORT_MOCK_BASE_URL');
            $publicTransportURL = $baseURL . '/vehicle/location' ;
            $response = Http::get($publicTransportURL);
            $vehicle = json_decode($response);
        }catch(Exception $e){
            Log::error('Unable to fetch vehicle details');
        }
        Log::info('vehicle: ', ['vehicle' => $vehicle]);
        return view('vehicleLocation',['vehicle' => $vehicle]);
    }
}
