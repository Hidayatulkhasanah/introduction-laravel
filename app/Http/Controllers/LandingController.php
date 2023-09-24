<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function landing(){
        $data = [
            'name' => 'Hida Syantiks',
            'location' => 'Bandung'
        ];
        return view('Landing.page',$data);
    }
}
