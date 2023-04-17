<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Spatie\FlareClient\View;
use App\Models\profile;
class ControllerHome extends Controller
{
    public function Home(Request $request)
    {
        // $Profiles = profile::all();
        // // dd($Profiles);

        return view('Home');
        // compact  utilise pour passe plusieurs variable a la vue 
    }
}