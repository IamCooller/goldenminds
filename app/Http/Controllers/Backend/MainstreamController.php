<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\mainstream;
use Illuminate\Support\Facades\Storage;

class MainstreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainstream = mainstream::latest()->first(); 
        return view('backend.mainstream.index',  ['mainstream'=> $mainstream]);
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
    public function store(Request $request, mainstream $model)
    {
        $model->title = $request ->title;
        $model->content = $request->content;
        $model->project_content = $request->project_content;
        $model->economy_content = $request->economy_content;
        $model->advice_content = $request->advice_content;

 
        if( $request->hasFile('files')) {
            $filenameWithExt = $request->file('files')->getClientOriginalName();
            // Только оригинальное имя файла
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Расширение
            $extention = $request->file('files')->getClientOriginalExtension();
            // Путь для сохранения
            $fileNameToStore = "files/mainsream/".$filename.".".$extention;
            // Сохраняем файл
            $model->files =  $request->file('files')->storeAs('public', $fileNameToStore);
        }
        

  
      
        
        $model->save();
        return redirect()->route('mainstream.index')
        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mainstream  $mainstream
     * @return \Illuminate\Http\Response
     */
    public function show(mainstream $mainstream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mainstream  $mainstream
     * @return \Illuminate\Http\Response
     */
    public function edit(mainstream $mainstream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mainstream  $mainstream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mainstream $mainstream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mainstream  $mainstream
     * @return \Illuminate\Http\Response
     */
    public function destroy(mainstream $mainstream)
    {
        //
    }
}
