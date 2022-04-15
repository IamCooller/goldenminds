<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\ArticleRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::simplePaginate(10);
        return view('backend.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request, News $model )
    {
        $result = false;
        $model->name = $request->name;
        $model->content = $request->content;
        $model->author = $request->author;
          
        if($request->hasFile('images'))
            {
            $images = $model->images;
            $files = $request->file('images');
            foreach ($files as $file) {
                $extention = $file->getClientOriginalExtension();
                $fileNameToStore = 'image/' . $model->id . 'images/'.sha1_file($file).".".$extention;
                $path = $file->storeAs('public', $fileNameToStore);
                $images[] = "/storage/".$fileNameToStore;
             
            }
          
            $model->images = $images;
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
        }
        

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
        $model = News::findOrFail($id);
        return view('backend.news.edit', [
            'model' => $model
        ]);
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
        $result = false;
        $model = News::findOrFail($id);
        $model->name = $request->name;
        $model->content = $request->content;
        $model->author = $request->author;
        $model->image = $request->image;  
        
        $result = $model->update();

        if($result) {
            return back()->with('success','Article saved!');
        }else{
            return back()->with('error','An error has occurred!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = News::find($id);
        
        if(!$model) {
            abort(404);
        }
        
        $model->delete();
        
        return back()->with('success','Article deleted!');
    }
}
