<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
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
        
        if(session('admin') == '')
        {
            session()->flash('auth','Admin not logged  in');
            return response()->view('admin/login');
        }

        if(session('admin') !="" && $request->path()=='admin/login' )
        {
            session()->flash('auth','Admin already Signed in');
            return redirect('/admin/index');
        }
        return $next($request);
    }
}
