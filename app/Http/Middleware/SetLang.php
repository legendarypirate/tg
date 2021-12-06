<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Session;

class SetLang {
	public function handle($request, Closure $next)
	{

        if(Session::has('lang')) {
            $lang = Session::get('lang');
        }else{

            $lang='en';
        }


        if (isset($lang)) {
            app()->setLocale($lang);
        }

    	return $next($request);
  	}
}
