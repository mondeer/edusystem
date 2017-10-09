<?php

namespace transcounty\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
{
    
    public function handle($request, Closure $next)
    {
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug=='county')
            return $next($request);
       
        else
            return redirect()->back();
    }
}
