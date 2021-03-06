<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user
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
        if(session('user') == "")
        {
            session()->flash('msg','User Not  logged  in');
            return response()->view('user/login');
        }

        if(session('user') !="" && $request->path()=='user/login' || $request->path() =='user/register')
        {
            // dd(session('user'));
            session()->flash('msg','User already Signed in');
            return redirect('/user/index');
        }
        return $next($request);
    }
}
