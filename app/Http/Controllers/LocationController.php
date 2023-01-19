<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Location;
use Stevebauman\Location\Facades\Location as FacadesLocation;


class LocationController extends Controller
{
    public function index(Request $request)
    {
            // $ip = $request->ip();
            // $data = \Location::get($ip);
            // dd($data);
        $whoIsIp = request()->ip();
        // $position = Location::get($whoIsIp);
        $poisiton2 = FacadesLocation::get($whoIsIp);

        dd($poisiton2);

    }
}
