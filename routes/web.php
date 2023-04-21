<?php

use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\informationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;
use App\Service\Somme;
use Illuminate\Mail\Attachment;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test;
use Illuminate\Http\Request;

use App\Models\profile;
use Psr\Container\ContainerInterface;
use Spatie\FlareClient\Http\Response;


Route::get('/', [ControllerHome::class, 'Home'])->name("Home"); /* call is a function in controlle */
//list all profile from database
Route::get('/Profile', [ProfileController::class, 'indexProfile'])->name('Profile');
//Route setting
Route::get('/Details', [informationController::class, 'indexInformation']);
Route::get('/test', [test::class, 'test']);


// affiche le details d'une profile par id
Route::get('/ShowDetails/{id}', [ProfileController::class, 'show'])->where(["id" => "\d+"])->name("Profile.Details"); //pour filter par un autre parametre modelname:column_name (ShowDetails:name)
//// create Profil view
Route::get('/Profile/create', [ProfileController::class, 'createView'])->name('create.profile');

//// store the data dans la bs
Route::post('/Profile/store', [ProfileController::class, 'Store'])->name('Store');
//________delete___________
// Delete Profile
Route::delete("/Profile/delete/{profile}", [ProfileController::class, "destroy"])->name("destroy");
//---------------- update--------------
// update
Route::put("/Profile/{profile}", [ProfileController::class, "Update"])->name("Profile.Update");
// update view layout form
Route::get("Profile/{profile}/edit", [ProfileController::class, "viewUpdate"])->name("viewUpdate");



//_________________login __________-_
// login view
Route::view('/Login', 'Login.LoginView')->name("Login");
//login
Route::post("/connected", [LoginController::class, "connection"])->name("connected");
// logout
Route::get("Logout", [LoginController::class, "Logout"])->name("Logout");



// service container 
Route::get("/calculer/{a}/{b}", function ($a, $b, Somme $Calc) {
   return $Calc->Somme($a, $b);

});
// retrive the delted data
// Route::get("retrive", function () {
//    return profile::withTrashed()->get();
// });
// on peut faire group by controller 
// Route::controller("nom de controller")->group(function()=>{

// })
// on peut utillise ressouce pour bien organise les Route
// Route::resources("path comun ",controller::class);

// Route Model binding test33/{data:base_Column}} 
Route::get("test33/{data:id}", [ProfileController::class, 'getKeys']);
// affiche et telecharge un ficher 
Route::get("/telecharge", function () {
   // return  Response("hamza",404,["content-type"=>"text/pdf"]);´

   return response()->download("app/Http/Controllers/Controller.php", "file");
});
/// Cookie
Route::get("/getcookie", function (Request $request) {
   dd($request->cookie("Cookie"));
});
Route::get("/Setcookie", function () {
   $response = new \Illuminate\Http\Response();
   $cookieObject = cookie()->forever("Cookie", "this is my cookis", 2);

   return $response->withCookie($cookieObject);
});
//  header
Route::get("Header", function () {
   $response = new \Illuminate\Http\Response();
   // dd(request()->header("Cache-Control")); pour accerder le header
   
});

//  publication 
Route::resource("publication",PublicationController::class);