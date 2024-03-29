<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\News2 as News;
use App\Model\NewsOptions;
use Illuminate\Http\Request;
use App;

use App\Events\PostHasViewed;

class PressCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = App::getLocale();
        $date = "date_" . $locale;
        $publish = 'published_' . $locale;
        $news = News::latest($date)->where($publish, '1')->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'news', $onFirstPage = 0
        );
       
        $NewsOptions = NewsOptions::latest()->first();
       
        return view('frontend/press-center/index', compact('news','NewsOptions'));
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
        $news = News::findOrFail($id);
        $allNews = News::paginate(7);
        event(new PostHasViewed($news));
        return view('frontend/press-center/single', compact('news','allNews'));
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
