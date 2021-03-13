<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUser
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
        if($request->session()->get('utype')=='admin'){
            return $next($request);
        }
        else{
            $request->session()->flash('msg', 'Access Deniyed other than Admin');
            return redirect('/home');
        }
    }
}
