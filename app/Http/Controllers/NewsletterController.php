<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// faire pagination dans admin
use Illuminate\Support\Facades\Storage;
use App\Newsletter; 
use App\Mail\EnvoiMessage;
use Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::all();

        $newsletters = DB::table('newsletters')->orderBy('id','desc')->paginate(5);

        return view('admin.newsletter.index',compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsletter = new Newsletter();
        // mini validation
        $request->validate(['email'=>'required|email']);
        Mail::to(request('email'))->send(new EnvoiMessage($request));
        
        $newsletter = new Newsletter();

        $newsletter->email = request('email');

        $newsletter->save();

        return redirect()->back()->with('messages','Votre email a été envoyé! Merci!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsletters = Newsletter::find($id);

        $newsletters->delete();
        
        return redirect()->route('newsletter.index');
    }
}
