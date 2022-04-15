<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Admin;
use App\Models\Contacts;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        $contacts = Contacts::latest()->first(); 
        return view('backend.contacts.index',  ['contacts'=> $contacts]);
    }


    public function store(Request $request, Contacts $model )
    {
        
        $model->tel1 = $request ->tel1;
        $model->tel2 = $request->tel2;
        $model->email = $request->email;
        $model->time = $request->time;
        $model->pause = $request->pause;
        $model->schedule = $request->schedule;
        $model->rest = $request->rest;
        $model->address = $request->address;
        $model->map = $request->map;
        
        $model->save();
        return back()->with('success','Article saved!');
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
