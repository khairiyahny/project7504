<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function getLocation(Request $request) 
    {   
        $latitude = $request->input('latitude'); 
        $longitude = $request->input('longitude'); 
        // Save the location to the database 
        if ($latitude && $longitude) 
        {   Location::create([ 
                'latitude' => $latitude, 
                'longitude' => $longitude, 
            ]); 
        } 
        
        // Return the location view with the location data 
        
        return view('location', compact('latitude', 'longitude')); 
    }
}
