<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMain extends Controller
{

    public function login (Request $request)
    {
        if($request->email =="admin@homeitall.net" && $request->password =="password"){
            $request->session()->put('admin',$request->input());
            return redirect()->to('admin/index');
        }
        else{
            return back()->with('msg','Invalid Login Details');
        }
    }

    public function logout()
    {
        session()->pull('admin');
        session()->forget('admin');
        return view('admin/login');
    }

 
}
