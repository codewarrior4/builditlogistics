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

    public function customers()
    {
        $customers = Users::latest()->get();
        return view('admin.customers',compact('customers'));
    }
    public function customer($id)
    {
        $customer = Users::find($id);
        return view('admin.customer',compact('customer'));
    }

    public function customerStatus(Request $request)
    {
        $user = Users::find($request->id);
        $user->status = $request->status;
        $user->save();
        return redirect('/admin/customer/'.$request->id )->with('msg','Account Status changed');

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
            'status'=>1,
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

    public function resendverification(){
        
        if(session('user')=='')
        {
            return redirect('/user/login')->with('msg','User not logged in');
        };
        if(session('user'))
        {
            $user= session('user');
            Mail::to($user->email)->send(new VerifyMail($user));
            return view('user.verify');
        }

        if(session('user')->verified==1){
            return redirect('/user/index')->with('msg','Account Has Been Verified'); 
        }
        
        
    }

    public function logout(){
        if(session()->has('user'))
        {
            session()->pull('user');
            session()->forget('user');
            return redirect('user/login');
        }
    }

    public function login (Request $request)
    {
        $user= Users::where(['email'=>$request->email])->first();
        
        // return $user;
        if(!$user || !(Hash::check($request->password,$user->password)))
        {
            return redirect('user/login')->with('msg','Username or Password not found ');
        }
        else{
            $request->session('user')->put('user',$user);
            if(session('user')->verified ==0)
            {
                Mail::to($user->email)->send(new VerifyMail($user));
                return view('user.verify');
            }
            else
            {
                if(session('user')->status ==2)
                {
                    return redirect('user/login')->with('msg','Hello '.$user->firstname .' Your Account has been disabled . Kindly reach out to our customer care for activation');
                }
                return redirect('user/index')->with('msg','Welcome back '.$user->firstname);
            }
        }
        
    }
   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
