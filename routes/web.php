<?php

use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\informationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test;
use Illuminate\Http\Request;
use App\Http\Controllers\getdata;

use App\Models\profile;


Route::get('/', [ControllerHome::class, 'call'])->name("Home"); /* call is a function in controlle */
//list all profile from database
Route::get('/Profile', [ProfileController::class, 'indexProfile'])->name('Profile');
//Route setting
Route::get('/Details', [informationController::class, 'indexInformation']);
Route::get('/test', [test::class, 'test']);
// '\App\Http\Controllers\HomeController
// Route::get(
//     '/{name}',
//     [HomeController::class, 'index']
// )->whereNumber('name');


// affiche le details d'une profile par id
Route::get('/ShowDetails/{id}', [ProfileController::class, 'show'])->where(["id" => "\d+"])->name("Profile.Details"); //pour filter par un autre parametre modelname:column_name (ShowDetails:name)
//// create Profil view
Route::get('/Profile/create', [ProfileController::class, 'createView'])->name('create.profile');

//// store the data dans la bs
Route::post('/Profile/store', [ProfileController::class, 'Store'])->name('Store');


// Delete Profile
Route::delete("/Profile/delete/{profile}", [ProfileController::class, "destroy"])->name("destroy");

// update
Route::put("/Profile/{profile}", [ProfileController::class, "Update"])->name("Profile.Update");
// update view
Route::get("Profile/{profile}/edit", [ProfileController::class, "viewUpdate"])->name("viewUpdate");



// login view
Route::view('/Login', 'Login.LoginView')->name("Login");
//login
Route::post("/connected", [LoginController::class, "connection"])->name("connected");
// logout
Route::get("Logout", [LoginController::class, "Logout"])->name("Logout");
// retrive the delted data
// Route::get("retrive",function(){
//     return profile::withTrashed()->get();
// });
