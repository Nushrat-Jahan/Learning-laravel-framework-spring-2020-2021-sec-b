<?php

namespace App\Http\Middleware;

use Closure;

class AdminVerify
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
        if($request->session()->get('user_type')=='Admin'){
            return $next($request);
        }
        else{
            $request->session()->flash('user', 'It is Admin Section');
            return redirect('/home');
        }
    }
}
