<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function index()
    {
        $ip = '106.0.52.138'; /* Static IP address */
        //use your own ip address

        $data = [
            'location' => Location::get($ip)
        ];

        return view('location', $data);
    }
}
