<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Model\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status='all')
    {
        $active='';
        if($status == 'Afghanistan')
        {
            $projects = Projects::where( 'category', 'Афганистан')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='Afghanistan';
            return view('frontend/projects/index', compact('projects','active'));
        }else

        if($status == 'Vietnam')
        {
            $projects = Projects::where( 'category', 'Вьетнам')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='Vietnam';
            return view('frontend/projects/index', compact('projects','active'));
        }else

        if($status == 'Kazakstan')
        {
            $projects = Projects::where( 'category', 'Казахстан')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='Kazakstan';
            return view('frontend/projects/index', compact('projects','active'));
        }else

        if($status == 'Kirgizia')
        {
            $projects = Projects::where( 'category', 'Киргизия')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='Kirgizia';
            return view('frontend/projects/index', compact('projects','active'));
        }else

        if($status == 'Tajikistan')
        {
            $projects = Projects::where( 'category', 'Таджикистан')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='Tajikistan';
            return view('frontend/projects/index', compact('projects','active'));
        }else


        if($status == 'Turkmenistan')
        {
            $projects = Projects::where( 'category', 'Туркменистан')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='Turkmenistan';
            return view('frontend/projects/index', compact('projects','active'));
        }
        else

        if($status == 'uzbekistan')
        {
            $projects = Projects::where( 'category', 'Узбекистан')->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
            );
            $active='uzbekistan';
            return view('frontend/projects/index', compact('projects','active'));
        }
        else


        $projects = Projects::paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'projects', $onFirstPage = 0
        );
      
       
        return view('frontend/projects/index', compact('projects','active'));
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
        $projects = Projects::findOrFail($id);
        $allProjects = Projects::paginate(7);
        return view('frontend/projects/single', compact('projects','allProjects'));
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
