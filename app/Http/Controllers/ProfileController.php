<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use function PHPSTORM_META\type;

class ProfileController extends Controller
{
    public function indexProfile()
    {
        // supprimer un element
        // $profile = profile::where('id', '=', 1)->delete();
        $profiles = profile::paginate(8); // return 10 line from data base with link() to navigate bettween them
        // prender just la valeur de email par condition
        // dd(profile::where('name', 'Mr. Dangelo Heathcote I')->value('email'));
        //  dd(profile::pluck('email'));
        // $profiles = profile::find(2); find by id
        // dd($profiles->count()); return le nombre de document
        // dd($profiles->avg('id')); return lenght

        return view('Profile.Profile', compact('profiles'));
    }


    // show the details of the selecting Profile

    public function show(profile $id) // id qui herite mn le model profile

    {
        // $id = (int) $request->id; // disgnate the type of the id
        // $Profiles = profile::findOrFail($id); // if the id is not exists retun page Not found
        $Profiles = $id;
        return view('Profile.ShowProfile', compact('Profiles')); //passe le profile selectionner
    }

    public function createView(profile $profile)
    {
        dd( $profile);
       /* return view('Profile.ViewCreate');*/
    }

    //model binding
    public function Store(ProfileRequest $request)
    {
        //validation de inputs
        $request->validated();
        //Hash d'une mote dde pass cripatge
        $request["password"] = Hash::make($request->password);

        // $feildsData["password"]=Hash::make($request->password);

        // dd($request->post("name"));

        /* $email = $request->email;
        $name = $request->name;
        $bio = $request->bio;
        $password = $request->password;
        profile::create(
        [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'bio' => $bio
        ]
        ); */
        profile::create($request->input());// $request->post :return all input value
        //on peut faire aussi
        // profile::create($request->post());
        return redirect()->route('Profile')->with('success', 'Votre compte a Bien été Ajouter'); // key and value save a une session
    }

    public function destroy(profile $profile)
    {
        $profile->delete();
        // $profile->id(); on peut acceder le les proprite comme function de request
        return to_route("Profile")->with("success", "le Compte et bien ete Supprime");

    }

    public function Update(profile $profile)
    {


        $id = $profile;
        return profile::find($profile);
    }

    public function viewUpdate(profile $profile)
    {
        $id = $profile;
        $profil = profile::find($id);

        return view("Profile.UpdateProfile", compact("profil"));
    }

}
