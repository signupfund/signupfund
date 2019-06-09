<?php

namespace App\Http\Middleware;

use Closure;

class SuperUser
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
        if(auth()->user()->isSuperUser == 1)

        {
        
        return $next($request);

        }

        return redirect('unauthorized');

    }
}


