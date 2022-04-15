<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tenders;
use App\Http\Requests\TendersRequest;
use Illuminate\Support\Facades\Storage;

class TendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tenders::simplePaginate(10);
        return view('backend.tenders.index', [
            'tenders' => $tenders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tenders.create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TendersRequest $request, Tenders $model )
    {
        $result = false;
        $model->name = $request->name;
        $model->content = $request->content;
        $model->open = $request->open;
        $model->image = $request->image;
 
        if($request->hasFile('files'))
        {
        $files = $model->files;
        $files = $request->file('files');
        foreach ($files as $file) {
            $extention = $file->getClientOriginalExtension();
            $fileNameToStore = 'files/' . $model->id .sha1_file($file).".".$extention;
            $path = $file->storeAs('public', $fileNameToStore);
            $files[] = $fileNameToStore;
       /*      $filecontent = $file->openFile()->fread($file->getSize()); // эта магия из стэковерфлоу 
            //что за openFile() - я не понимаю... 
            $filename = $file->getClientOriginalName();  // getClientOriginalName() - тоже какой-то секретный
            //метод))) в документации его нет)) но это работает!))
            $files[] = $filename; */
        }
       
        $model->files = $files;
        
        }

            $result = $model->save();
        
        

        if($result) {
            return back()->with('success','Article saved!');
        }else{
            return back()->with('error','An error has occurred!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $Tender = Tenders::findOrFail($id);
        return view('backend.tenders.show', ['tender'=> $Tender]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $Tender = Tenders::findOrFail($id);
        return view('backend.tenders.edit', ['tender'=> $Tender]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
      
        $model = Tenders::findOrFail($id);
        $model->name = $request->name;
        $model->content = $request->content;
        $model->open = $request->open;

        if($request->hasFile('files'))
        {
        $files = $model->files;
        $files = $request->file('files');
        foreach ($files as $file) {
            $extention = $file->getClientOriginalExtension();
            $fileNameToStore = 'files/' . $model->id . 'files/'.sha1_file($file).".".$extention;
            $path = $file->storeAs('public', $fileNameToStore);
            $files[] = "/files/".$path;
         
        }
      
        $model->files = $files;
        }else{
            unset($model->files);
        }

        if( $request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Только оригинальное имя файла
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Расширение
            $extention = $request->file('image')->getClientOriginalExtension();
            // Путь для сохранения
            $fileNameToStore = "image/".$filename."_".time().".".$extention;
            // Сохраняем файл
            $model->image = str_replace('public/','storage/',$request->file('image')->storeAs('public', $fileNameToStore));
            $result = $model->save();
        }else{
            unset($model->image);
        }
        
            return redirect()->route('tenders.index')
            ->with('success','Тендер обновлен');
    
      
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {

   
        $model = Tenders::find($id)->delete();
        return redirect()->route('tenders.index')
                        ->with('success','Product deleted successfully');
    }
}

