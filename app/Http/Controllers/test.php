<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function test(Request $request)
    {    
        // dump($request);
        $nom='hammza';
        $table=['name'=>'hamza','prenom'=>'arif'];
        return view('Test',compact('nom','table'));
    }
}