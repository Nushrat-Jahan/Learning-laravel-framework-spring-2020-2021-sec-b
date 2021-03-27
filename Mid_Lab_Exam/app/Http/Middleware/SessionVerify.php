<?php

namespace App\Http\Middleware;

use Closure;

class SessionVerify
{
    public function handle($request, Closure $next)
    {
        if($request->session()->has('username') && $request->session()->has('user_type'))
        {
            return $next($request);
        }
        else{
            $request->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }
}
