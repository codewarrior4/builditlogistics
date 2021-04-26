<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkauth
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
        if(session('user') !="" && $request->path()=='user/login' || $request->path() =='user/register')
        {
            // echo ("wa");
            session()->flash('auth','User already Signed in');
            return view('user.index');
        }
        return $next($request);
    }
}
