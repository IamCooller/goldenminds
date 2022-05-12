<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App;
use App\Model\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $locale = App::getLocale();
        $column = "images_" . $locale;

        
       
        $photo= PhotoGallery::latest('data')->where($column, !' ')->paginate(
            $perPage = 4, $columns = ['*'], $pageName = 'photo', $onFirstPage = 0
        );
      
        return view('frontend/photo-gallery/index',compact('photo'));
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
        //
    }


    public function getImagesHomeAttribute()
    {
        $locale = App::getLocale();
        $column = "images_" . $locale;
        return $this->{$column};
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = PhotoGallery::findOrFail($id);


      /*   $photos = $title['images'];
            $total = count($photos);
            $perPage = 2; // How many items do you want to display.
            $currentPage = 1; // The index page.
            $paginator = new LengthAwarePaginator($photos, $total, $perPage, $currentPage, ['path' => route('photo-gallery-single', $currentPage)]);
             */
            $locale = App::getLocale();
            $column = "images_" . $locale;

            
            $data = $this->paginate($title[$column], ['path' => route('photo-gallery-single', $id)]);
     
        return view('frontend/photo-gallery/single',compact('data','title'));
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

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $options = [], $perPage = 9, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
