<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MembreRequest;
use App\Membre;
use App\Team;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::all();
        $teams = Team::all();
        return view('admin.main.team.index',compact('membres','teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main.team.membres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembreRequest $request)
    {
        $membre = new Membre();

        $membre->nom = request('nom');
        $membre->prenom = request('prenom');
        $membre->fonction = request('fonction');
        $membre->img = request('img')->store('img');

        $membre->save();

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membre = Membre::find($id);

        return view('admin.main.team.membres.edit',compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembreRequest $request, $id)
    {
        $membre = Membre::find($id);

        if(request('img') !== null){
            Storage::delete($membre->img);
            $membre->img = request('img')->store('img');
        }
        $membre->nom = request('nom');
        $membre->prenom = request('prenom');
        $membre->fonction = request('fonction');

        $membre->save();

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membre = Membre::find($id);

        Storage::delete($membre);

        $membre->delete();

        return redirect()->back();
    }
}