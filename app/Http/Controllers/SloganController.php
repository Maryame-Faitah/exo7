<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SloganRequest;
use App\Slogan;
use App\Hero;

class SloganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slogans = Slogan::all();
        $heros = Hero::all();
        return view('admin.main.hero.index',compact('slogans','heros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main.hero.slogan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SloganRequest $request)
    {
        $slogan = new Slogan();

        $slogan->titre = request('titre');

        $slogan->save();

        return redirect()->route('hero.index');
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
        $slogan = Slogan::find($id);

        return view('admin.main.hero.slogan.edit',compact('slogan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SloganRequest $request, $id)
    {
        $slogan = Slogan::find($id);

        $slogan->titre = request('titre');

        $slogan->save();

        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slogan = Slogan::find($id);

        Storage::delete($slogan);

        $slogan->delete();

        return redirect()->back();
    }
}