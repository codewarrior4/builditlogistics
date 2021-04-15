<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.register');
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = Users::find($request->email);
        if($check)
        {
            return redirect('/user/register')->with('msg', 'User With this email already exists');
        }
        $token = csrf_token();
        $user=Users::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'zip'=>$request->zip,
            'state'=>$request->state,
            'address'=>$request->address,
            'status'=>$request->status,
            'email'=>$request->email,
            'date'=>now(),
            'password'=>Hash::make($request->password),
            'remember_token'=>$token,
        ]);
        

           $request->session()->put('user',$user);
            Mail::to($user->email)->send(new VerifyMail($user));
            return view('user.verify');
    }

    public function verify(Request $request,$token){
        $token = $request->token;
        $user = Users::firstWhere('remember_token',$token);
        $user->verified=1;
        $user->save();
        return redirect('/user/index')->with('msg','Account Validation Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
