<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TemoinRequest;
use App\Temoin;
use App\Testimonial;

class TemoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoins = Temoin::all();
        $testimonials = Testimonial::all();
        return view('admin.main.testimonial.index',compact('temoins','testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main.testimonials.temoins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemoinRequest $request)
    {
        $temoin = new Temoin();

        $temoin->nom = request('nom');
        $temoin->prenom = request('prenom');
        $temoin->fonction = request('fonction');
        $temoin->img = request('img')->store('img');
        $temoin->temoignage = request('temoignage');
        
        $temoin->save();

        return redirect()->route('testimonials.index');
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
        $temoin = Temoin::find($id);

        return view('admin.main.testimonials.temoins.edit',compact('temoin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TemoinRequest $request, $id)
    {
        $temoin = Temoin::find($id);

        if(request('img') !== null){
            Storage::delete($temoin->img);
            $temoin->img = request('img')->store('img');
        }
        $temoin->nom = request('nom');
        $temoin->prenom = request('prenom');
        $temoin->fonction = request('fonction');
        $temoin->temoignage = request('temoignage');

        $temoin->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temoin = Temoin::find($id);

        Storage::delete($temoin);

        $temoin->delete();

        return redirect()->back();
    }
}
