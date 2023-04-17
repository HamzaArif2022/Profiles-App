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

        return view('Profile.Profile', compact('profiles')); //profiles is contient every row in from the table
    }


    // show the details of the selecting Profile

    public function show(profile $id) // id qui herite a partir de module le model profile (biding medule )
    {
        // $id = (int) $request->id; // disgnate the type of the id
        // $Profiles = profile::findOrFail($id); // if the id is not exists retun page Not found
        $Profiles = $id;
        return view('Profile.ShowProfile', compact('Profiles')); //passe le profile selectionner
    }

    public function createView(profile $profile)
    {
        return view('Profile.ViewCreate');
    }

    //model binding
    // pour creer un profile
    public function Store(ProfileRequest $request) // $request contient un un validation a partir d'une make:request
    {
        //validation de inputs
        $formFeilds = $request->validated(); // validated : qui permet la validation auto 

        //Hash d'une mote de pass cripatge
        $formFeilds["password"] = Hash::make($request->password);
        // stocke les image a la dossier Storage/profile 
        // test si image existes ou no (condition de insert image si il existes)
        if ($request->hasFile("image")) {
            $filename = $request->file("image")->store("profile", "public"); // return un chaine de caractere qui conteint le chemin de la photo 
            $formFeilds["image"] = $filename; // Modifier le fieled al la base donne avec la nouvelle valeur valeur de la image

        }
        $formFeilds["email"] = "hamza@gmail.com";
        /* storeAs("path", "filename","diskfilesysteme") */
        // affecter la nouvelle valeur a la image proprite


        profile::create($formFeilds); // $request->post :return all input value
        //on peut faire aussi
        // profile::create($request->post());
        return redirect()->route('Profile')->with('success', 'Votre compte a Bien été Ajouter'); // key and value enregistre a une session
    }
    //supprission 
    public function destroy(profile $profile)
    {
        $profile->delete();
        // $profile->id(); on peut acceder le les proprite comme function de request
        return to_route("Profile")->with("success", "le Compte et bien ete Supprime");

    }
    public function viewUpdate(profile $profile)
    {

        $profil = $profile;

        return view("Profile.UpdateProfile", compact("profil"));
    }
    //  pour mofidier un profile
    public function Update(ProfileRequest $request, profile $profile) 
    // recupere les donne inser avec le $profile=id de peofile a modifier /
    // and $request = formdata 
    {

        $ProfileValidated = $request->validated(); // validation les donne entrer
        $ProfileValidated["password"] = Hash::make($profile->password);// crypte le modt de passe
        unset($ProfileValidated["image"]);//unset pour vider la varible/ for keep the old picture if no update on image has done 
        if ($request->hasFile("image")) {
            $filename = $request->file("image")->store("profile", "public"); // return un chaine de caractere qui conteint le chemin de la photo 
            $ProfileValidated["image"] = $filename;

        }
        $profile->fill($ProfileValidated);

        $profile->save();
        // dd($ProfileValidated);

        return to_route("Profile.Details", $profile->id)->with("success", "votre Compte a ete Modifier ");
    }



}