<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\News2 as News;
use App\Model\Structura;
use App\Model\Mainstream;
use App\Model\License;
use App\Model\ISO;
use App\Model\History;
use App\Model\Guidance;
use App\Model\Departament;
use App\Model\Vacancy;
use App\Model\Regulations;
use App\Model\Projects;
use App\Model\Constitutive;
use App\Model\ContactMain;
use App\Model\Tenders;
use Illuminate\Http\Request;


class SitemapController extends Controller
{
    
    public function index(Request $r)
    {
       
        $news = News::orderBy('id','desc')->where('published', '1')->get();
        $structura = Structura::latest()->first()->get();
        $mainstream = Mainstream::latest()->first()->get();
        $license = License::latest()->first()->get();
        $ISO = ISO::latest()->first()->get();
        $history = History::latest()->first()->get();
        $guidance = Guidance::orderBy('id','desc')->get();
        $department = Departament::orderBy('id','desc')->get();
        $vacancy = Vacancy::latest()->first()->get();
        $regulations = Regulations::latest()->first()->get();
        $projects = Projects::orderBy('id','desc')->get();
        $tenders = Tenders::orderBy('id','desc')->get();
        $contacts = ContactMain::latest()->first()->get();
        
        $constitutive = Constitutive::latest()->first()->get();
        return response()->view('sitemap', compact('news','structura','mainstream','license','ISO','history','guidance','department','vacancy','regulations','projects','constitutive','tenders','contacts'))
          ->header('Content-Type', 'text/xml');

    }

    public function sitemap(Request $r)
    {

        return view('frontend/sitemap/index');
    }
}
