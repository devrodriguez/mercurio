<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->name;
        $correo = $request->correo;

        if(!empty($request->correo) && $request->hasFile('archivo')){
            // Save file
            $path = Storage::putfile('public/contact', $request->file('archivo'));
            $correo = $request->correo;
            
            /*
            Mail::raw('Message', compact('correo', 'path'), function($message) use ($correo, $path) {
                $message->from('john.rodriguez.25@hotmail.com', 'John');
                $message->to($correo);
                $message->attach($path);
            });
            */
        }

        return view('contact', compact('name', 'correo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
