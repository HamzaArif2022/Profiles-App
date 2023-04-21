<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublicationController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publication = Publication::all();

        return view("publication.index", compact("publication"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("publication.PublicCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        $formFeiled = $request->validated();
        if ($request->hasFile("image")) {
            $path = $request->file("image")->store("publication", "public");
            $formFeiled["image"] = $path;
        }
        $formFeiled["profile_id"] = Auth::id();
        Publication::create($formFeiled);
        return to_route("publication.index");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        return view("publication.UpdatePublication", compact("publication"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(PublicationRequest $request, Publication $publication)
    {
        $pub = $request->validated();
        if ($request->hasFile("image")) {
            $path = $request->file("image")->store("publication", "public");
            $pub["image"] = $path;
        }
        $isUpdated = $publication->fill($pub)->save();

        return to_route("publication.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return to_route("publication.index")->with("message", "bien supprimer");

    }
}