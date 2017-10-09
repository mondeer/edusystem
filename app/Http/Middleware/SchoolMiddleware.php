<?php

namespace transcounty\Http\Middleware;

use Closure;
use Sentinel;

class SchoolMiddleware
{
   
    public function handle($request, Closure $next)
    {
       if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug=='school')
            return $next($request);
       
        else
            return redirect()->back();
    }
}
