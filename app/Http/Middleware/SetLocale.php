<?php

namespace App\Http\Middleware;

use Closure;
use App;
class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      
      /*   session_start();
            if ((!isset(session('locale')))) session('locale') = 'oz';
            dd($_SESSION['locale']);
                App::setLocale(session('locale')); */

                $locale = self::getLocale();

                if($locale) App::setLocale($locale); 
                //если метки нет - устанавливаем основной язык $mainLanguage
                else App::setLocale(self::$mainLanguage); 
            
        return $next($request);
    }
}
