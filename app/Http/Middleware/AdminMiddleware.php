<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class AdminMiddleware
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
        // if (Auth::check() && Auth::user()->role->id == 1)
        // {
        //     return $next($request);
        // } else {
        //     return redirect()->route('login');
        // }

        /*
         * Roles array
         */
        // if (Auth::check() && Auth::user()->role->id == 1) {
        //     /**
        //      * Single role.
        //      */
        //     // $access = true;
        //      $access = (Auth::check() && Auth::user()->role->id == 1 ? true:false);
        // } else {
        //     /**
        //      * Single role.
        //      */
        //     $access = false;
        // }

        // if (!$access) {
        //     return redirect()->route('login');
        // } else {
        //     return $next($request);
        // }
        
            /**
             * Single role.
             */
            // $access = true;
        $access = (Auth::check() && Auth::user()->role->id == 1 ? true:false);

        if (!$access) {
            return redirect()->route('login');
        }       
     return $next($request);
        
    }
}
