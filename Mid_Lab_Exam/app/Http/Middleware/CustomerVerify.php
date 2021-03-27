<?php

namespace App\Http\Middleware;

use Closure;

class CustomerVerify
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
        if($request->session()->get('user_type')=='Customer'){
            return $next($request);
        }
        else{
            $request->session()->flash('msg', 'Customer Section');
            return redirect('/home');
        }
    }
}
