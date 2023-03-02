<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function connection(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $selectore = ["email" => $email, "password" => $password];
        //attempt is related to the database =select * from profiles where email= $email and "password"=$password
        if (Auth::attempt($selectore)) {
            $request->session()->regenerate(); // regenerate = make new session
            return to_route("Home")->with("success", "Vous Etes maintent connecter");
        } else {
            return back()->with("danger", "Votre Mot Pass\\Email invalid ")->onlyInput("email"); /* onlyinput :pour save the name email in session for make test on it  */
            // return back()->withErrors(["name"=>"specific error",...]);
        }


    }

    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return to_route("Login");


    }
}
