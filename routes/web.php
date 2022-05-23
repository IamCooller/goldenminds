<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::middleware(['set_locale'])->group(function(){

  });
 */

 
Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {

  Route::get('sitemap.xml','\App\Http\Controllers\SitemapController@index');
  Route::get('/', '\App\Http\Controllers\Frontend\HomeController@index')->name('home');

  Route::get('/sitemap', '\App\Http\Controllers\SitemapController@sitemap')->name('sitemap');

  Route::get('newlocale/{newlang}', function ($lang) {

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

    })->name('newlocale');


  Route::post('/', '\App\Http\Controllers\Frontend\MainController@index');
  Route::post('/send', '\App\Http\Controllers\Frontend\MainController@send');


  

  Route::get('mainstream', '\App\Http\Controllers\Frontend\MainstreamController@index')->name('mainstream');
  Route::get('structure', '\App\Http\Controllers\Frontend\StructuraController@index')->name('structure');
  Route::get('license', '\App\Http\Controllers\Frontend\LicenseController@index')->name('license');
  Route::get('ISO', '\App\Http\Controllers\Frontend\ISOController@index')->name('ISO');
  Route::get('history', '\App\Http\Controllers\Frontend\HistoryController@index')->name('history');

  Route::get('guidance', '\App\Http\Controllers\Frontend\GuidanceController@index')->name('guidance');
  Route::get('guidance/{id}', '\App\Http\Controllers\Frontend\GuidanceController@show')->name('guidance-single');


  Route::get('department', '\App\Http\Controllers\Frontend\DepartamentController@index')->name('department');
  Route::get('department/{id}', '\App\Http\Controllers\Frontend\DepartamentController@show')->name('department-single');

  Route::get('vacancy', '\App\Http\Controllers\Frontend\VacancyController@index')->name('vacancy');
  Route::post('vacancy', '\App\Http\Controllers\Frontend\VacancyController@send');
  Route::get('regulations', '\App\Http\Controllers\Frontend\RegulationsController@index')->name('regulations');



  /* Проекты */

  Route::get('projects', '\App\Http\Controllers\Frontend\ProjectsController@index')->name('projects');
  Route::get('project/{id}', '\App\Http\Controllers\Frontend\ProjectsController@show')->name('project-single');
  Route::get('projects/{status}', '\App\Http\Controllers\Frontend\ProjectsController@index')->name('projects-status');

  /* Учередителям */

  Route::get('constitutive', '\App\Http\Controllers\Frontend\СonstitutiveController@index')->name('constitutive');
  

  /* Тендеры */

  Route::get('tenders', '\App\Http\Controllers\Frontend\TendersController@index')->name('tenders');
  Route::get('tender/{id}', '\App\Http\Controllers\Frontend\TendersController@show')->name('tender-single');
  Route::get('tenders/{status}', '\App\Http\Controllers\Frontend\TendersController@index')->name('tenders-status');

    /* Виртуальная приемная */
    Route::get('virtual-reception', '\App\Http\Controllers\Frontend\VirtualReceptionController@index')->name('virtual-reception');
    Route::post('virtual-reception', '\App\Http\Controllers\Frontend\VirtualReceptionController@send');
  /* Пресс-центер */
  Route::get('press-center', '\App\Http\Controllers\Frontend\PressCenterController@index')->name('press-center');
  Route::get('press-center/{id}', '\App\Http\Controllers\Frontend\PressCenterController@show')->name('press-center-single');


  /* Фото галерея */
  Route::get('photo-gallery', '\App\Http\Controllers\Frontend\PhotoGalleryController@index')->name('photo-gallery');
  Route::get('photo-gallery/{id}', '\App\Http\Controllers\Frontend\PhotoGalleryController@show')->name('photo-gallery-single');

    /* Видео галерея */
    Route::get('video-gallery', '\App\Http\Controllers\Frontend\VideoGalleryController@index')->name('video-gallery');
    Route::get('video-gallery/{id}', '\App\Http\Controllers\Frontend\VideoGalleryController@show')->name('video-gallery-single');
  
  /* Контакты */

  Route::get('contacts', '\App\Http\Controllers\Frontend\ContactsController@index')->name('contacts');
  Route::post('contacts', '\App\Http\Controllers\Frontend\ContactsController@send');

  /* Поиск */

  
  Route::get('/search_none/{search}', [\App\Http\Controllers\Frontend\HomeController::class, 'search_none']);

  Route::get('search', '\App\Http\Controllers\Frontend\SearchController@index')->name('search');

  Route::get('/admin', function () {
    return view('auth');
  });
  
  Auth::routes();
});



