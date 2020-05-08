<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServiceslistRequest;
use App\Serviceslist;
use App\Service;

class ServiceslistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceslists = Serviceslist::all();
        $services = Service::all();
        return view('admin.services.servicescard.index',compact('serviceslists','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.servicescard.serviceslist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceslistRequest $request)
    {
        $serviceslist = new Serviceslist();

        $serviceslist->titre = request('titre');
        $serviceslist->icon = request('icon');
        $serviceslist->description = request('description');
        
        $serviceslist->save();

        return redirect()->route('servicescard.index');
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
        $serviceslist = Serviceslist::find($id);

        return view('admin.services.servicescard.serviceslist.edit',compact('serviceslist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceslistRequest $request, $id)
    {
        $serviceslist = Serviceslist::find($id);

        $serviceslist->titre = request('titre');
        $serviceslist->icon = request('icon');
        $serviceslist->description = request('description');

        $serviceslist->save();

        return redirect()->route('servicescard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceslist = Serviceslist::find($id);

        Storage::delete($serviceslist);

        $serviceslist->delete();

        return redirect()->back();
    }
}
