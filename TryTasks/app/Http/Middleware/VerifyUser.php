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
        if($request->session()->get('username')=='admin'){
            return $next($request);
        }
        else{
            $request->session()->flash('msg', 'Only admin has the authority to do CRUD operation');
            return redirect('/home');
        }
    }
}
