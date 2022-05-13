<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\NewsController;
use App\Model\News2 as News;
use App\Model\Projects;
use App\Models\Tenders;
use App\Models\Contacts;
use Illuminate\Support\Facades\Blade;

use Illuminate\Support\Facades\Route;
use App\Http\Requests\ContactFormRequest;
use App\Models\AdminMail;
use App\Models\mainstream;
use App\Models\Structure;
use App\Notifications\InboxMessage;
use phpDocumentor\Reflection\Types\Null_;
use App;
use App\Model\Options;
use App\Model\Guidance;
use App\Model\HomePage;
class HomeController extends Controller
{
    public function index() {

      /*   $currentLocal = app()->getLocale(); */
     
        /*     $currentLocal =   App::setLocale($locale);
        dd($currentLocal); */
        $projects = Projects::all();
        
        $locale = App::getLocale();
        $category = 'category_' . $locale;
        

        $projectsAfg = Projects::where($category, 'Афганистан')->get();
        $projectsViet = Projects::where($category, 'Вьетнам')->get();
        $projectsKazah = Projects::where($category, 'Казахстан')->get();
        $projectsKirgiz = Projects::where($category, 'Киргизия')->get();
        $projectsTajik = Projects::where($category, 'Таджикистан')->get();
        $projectsTurk = Projects::where($category, 'Туркменистан')->get();
        $projectsUzbek = Projects::where($category, 'Узбекистан')->get();
        $guidances = Guidance::all();
        
        $newsl = "date_" . $locale;
        $news = News::latest($newsl)->where('published', '1')->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'news', $onFirstPage = 0
        );
     
        $homepage = HomePage::latest()->first();
        $options = Options::latest()->first();
    
        return view('frontend.home.index', compact('projectsAfg','projectsViet','projectsKazah','projectsKirgiz','projectsTajik','projectsTurk','projectsUzbek','guidances','news', 'homepage', 'options'));
    }


    


    
    public function change($lang)
    {
      /*   if ((!isset($_SESSION['locale']))) {$_SESSION['locale'] = 'oz';}else{
        session(['locale'=>$locale]);
        }
       
        App::setLocale($locale); */
        /* $currentLocal = App::getLocale(); */
    
   

  $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
  $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

  //разбиваем на массив по разделителю
  $segments = explode('/', $parse_url);

  //Если URL (где нажали на переключение языка) содержал корректную метку языка
  if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

      unset($segments[1]); //удаляем метку
  } 
  
  //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
  if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){ 
      array_splice($segments, 1, 0, $lang); 
  }

  //формируем полный URL
  $url = Request::root().implode("/", $segments);
  
  //если были еще GET-параметры - добавляем их
  if(parse_url($referer, PHP_URL_QUERY)){    
      $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
  }
  return redirect($url); //Перенаправляем назад на ту же страницу                            


      
    }

    public function translations()
    {
     
    
        return view('vendor.translation-manager');
    }

    public function mainstream()
    {
        $mainstream = mainstream::latest()->first();
    
        return view('frontend.institute.mainstream', compact('mainstream'));
    }

    public function structure()
    {
        $Structure = Structure::latest()->first();
    
        return view('frontend.institute.structure', compact('Structure'));
    }
    public function ISO()
    {
        return view('frontend.institute.ISO');
    }
    public function history()
    {
        return view('frontend.institute.history');
    }
    public function department()
    {
        return view('frontend.institute.department');
    }
    public function vacancy()
    {
        return view('frontend.institute.vacancy');
    }
    public function regulations()
    {
        return view('frontend.institute.regulations');
    }

    public function license()
    {
        return view('frontend.institute.license');
    }

    public function guidance()
    {
        return view('frontend.institute.guidance');
    }

    public function guidance_single()
    {
        return view('frontend.institute.guidance_single');
    }
    public function department_single()
    {
        return view('frontend.institute.department_single');
    }

    
    public function projects()
    {
        return view('frontend.projects.projects');
    }

    public function projects_single()
    {
        return view('frontend.projects.projects-single');
    }


    public function constitutive()
    {
        return view('frontend.constitutive.constitutive');
    }

    public function tenders()
    {
 
        $tenders = Tenders::paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
        );
          Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });

         return view('frontend.tenders.tenders', ['tenders'=> $tenders]);
    }
    

    public function tenders_done()
    {
       
        $tenders = Tenders::where( 'open', NULL)->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
        );
          Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        return view('frontend.tenders.tenders', ['tenders'=> $tenders]);
    }
    public function tenders_close()
    {
       
        $tenders = Tenders::where( 'open', 1)->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
        );
          Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        return view('frontend.tenders.tenders', ['tenders'=> $tenders]);
    }

    public function tenders_single(int $id)
    {
        $Tenders = Tenders::findOrFail($id);
        $allTenders = Tenders::paginate(7);
        return view('frontend.tenders.tenders_single', ['tenders'=> $Tenders, 'allTenders' => $allTenders]);
    }

    public function PressСenter()
    {
      $news = News::paginate(
        $perPage = 9, $columns = ['*'], $pageName = 'news', $onFirstPage = 0
    );
      Blade::directive('datetime', function ($expression) {
        return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
    });
       
         return view('frontend.PressСenter.PressСenter', ['news'=> $news]);
    }

    public function PressСenter_single(int $id)
    {   
        $news = News::findOrFail($id);
        $allNews = News::paginate(7);
        return view('frontend.PressСenter.PressСenter_single', ['news'=> $news, 'allNews' => $allNews]);
    }

    public function contacts()
    {   
        
        $contacts = Contacts::latest()->first();
       
        return view('frontend.contacts.contacts', ['contacts'=> $contacts]);
    }
    
    public function search()
    {
        return view('frontend.search.search');
    }
    
    public function search_none()
    {
        return view('frontend.search.search_none');
    }
    
    public function mailToAdmin(ContactFormRequest $message, AdminMail $admin)
    {
        
        //send the admin an notification
        $admin->notify(new InboxMessage($message));
        // redirect the user back
        return redirect()->back()->with('message', 'Спасибо за обращение! Ваше сообщение успешно отправлено администратору сайта!');
    }

    

}
