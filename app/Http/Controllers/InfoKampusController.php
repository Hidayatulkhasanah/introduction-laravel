<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoKampusController extends Controller
{
    function index () {
        return view('kampus.info');
    }
}
