<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationController extends Controller
{

    public function indexInformation()
    {
        return view('settings');// call view file  sittings 
    }
    
}