<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mymiddlewre
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if($request->nom !=="pungu"){
             return redirect()->route("login");
         }
        return $next($request);
    }
}
