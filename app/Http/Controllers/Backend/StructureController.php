<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Structure = Structure::latest()->first(); 
        return view('backend.Structure.index',  compact('Structure'));
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
    public function store(Request $request, Structure $model)
    {
        $model->link = $request ->link;
        $model->content = $request->content;
        if($request->hasFile('images'))
        {
        $images = $model->images;
        $files = $request->file('images');
        foreach ($files as $file) {
            $extention = $file->getClientOriginalExtension();
            $fileNameToStore = 'image/' . $model->id . 'images/'.sha1_file($file).".".$extention;
            $path = $file->storeAs('public', $fileNameToStore);
            $images = "/storage/".$fileNameToStore;
         
        }
        dd($images);
        $model->images = $images;
    }
        $model->save();
        return redirect()->route('structure.index')
        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Structure  $Structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $Structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Structure  $Structure
     * @return \Illuminate\Http\Response
     */
    public function edit(Structure $Structure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Structure  $Structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Structure $Structure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Structure  $Structure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Structure $Structure)
    {
        //
    }
}
