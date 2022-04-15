<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;


use App\Model\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
class VideoGalleryController extends Controller
{
    public function index()
    {
        $video= VideoGallery::paginate(
            $perPage = 4, $columns = ['*'], $pageName = 'video', $onFirstPage = 0
        );
        return view('frontend/video-gallery/index',compact('video'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = VideoGallery::findOrFail($id);


       /*  $videos = $title['images'];
            $total = count(array($videos));
            $perPage = 3; // How many items do you want to display.
            $currentPage = 1; // The index page.
            $paginator = new LengthAwarePaginator($videos, $total, $perPage, $currentPage, ['path' => url('/video-gallery/2')]); */
            $videos = $this->paginate(explode(",", $title['images']), ['path' => route('video-gallery-single', $id)]);
        return view('frontend/video-gallery/single',compact('videos','title'));
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
    public function paginate($items, $options = [], $perPage = 9, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
