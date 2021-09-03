<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Informations;
use App\Mail\VerifyMail;
use App\Mail\passwordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class user extends Controller
{
   
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

    public function update(Request $request)
    {
        $user = Users::find($request->id);
        $user->remember_token = csrf_token();
        $user->firstname= $request->firstname;
        $user->lastname= $request->lastname;
        $user->address= $request->address;
        $user->state= $request->state;
        $user->city= $request->firstname;
        $user->zip= $request->zip;
        $user->phone= $request->phone;
        $user->save();
        $newuser=Users::find($request->id);
        $request->session()->put('user',$newuser);
        return redirect('/user/index/')->with('msg','Profile Update Successful');

    }

    public function customerStatus(Request $request)
    {
        $user = Users::find($request->id);
        $user->status = $request->status;
        $user->save();
        return redirect('/admin/customer/'.$request->id )->with('msg','Account Status changed');
    }

    public function changepassword(Request $request)
    {
        if($request->new == $request->cnew)
        {
            $user = Users::where(['id'=>$request->id])->first();
            $user->password =Hash::make($request->cnew);
            $user->save();
            $newuser=Users::find($request->id);
            $request->session()->put('user',$newuser);
            return redirect('/user/login')->with('msg','Passwords changed successfully');
        }
        else
        {
            $request->session()->flash('msg','Passswords do match');
            return back();
        }
    }

    public function userpassword(Request $request)
    {
        if($request->new == $request->cnew)
        {
            $user = Users::find(session('user')->id)->first();
            $user->password =Hash::make($request->cnew);
            $user->save();
            $newuser=Users::find(session('user')->id);
            $request->session()->put('user',$newuser);
            $request->session()->flash('msg','Passswords changed successfully');
            return back();
        }
        else
        {
            $request->session()->flash('msg','Passswords do match');
            return back();
        }
    }

    public function passview($token)
    {
        $user = Users::where(['remember_token'=>$token])->first();
        if($user) {
            return view('user.changePassword',compact('user'));
        }
        else{
            return view('main.expired');
        }
        
    }

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
            'email'=>strtolower($request->email),
            'date'=>now(),
            'password'=>Hash::make($request->password),
            'remember_token'=>$token,
        ]);
        
           
           $request->session()->put('mailer',$user);
            Mail::to($user->email)->send(new VerifyMail($user));
            return view('user.verify');
    }

    public function verify(Request $request,$token)
    {
        $token = $request->token;
        $user = Users::firstWhere('remember_token',$token);
        // echo $user;
        if($user)
        {       
            $user->verified=1;
            $user->save();
            $request->session()->put('user',$user);
            if(session('mailer')){
                session()->pull('mailer');
            }
            return redirect('/user/index')->with('msg','Account Validation Successful');
        }
        else
        {
            return view('main.expired');
        }

    }

    public function resendverification()
    {
        if(session('mailer')=='')
        {
            return redirect('/user/login')->with('msg','User not logged in');
        };
        if(session('mailer'))
        {
            $user= session('mailer');
            Mail::to($user->email)->send(new VerifyMail($user));
            return view('user.verify');
        }

        if(session('user')->verified==1){
            return redirect('/user/index')->with('msg','Account Has Been Verified'); 
        }
        
        
    }

    public function forgot (Request $request)
    {
         $user = Users::where('email',strtolower($request->email))->get();
            if(count($user) ==0)
            {
                return redirect('user/forgot')->with('msg','This Email Doesn not exist');
            }
            
            Mail::to($request->email)->send(new passwordReset($user[0]));
            $user=$user[0];
            return view('user.forget',compact('user'));
        
       
    }

    public function logout()
    {
            session()->pull('user');
            session()->forget('user');
            return redirect('user/login');
    }

    public function login (Request $request)
    {
        $user= Users::where(['email'=>strtolower($request->email)])->first();
        // return $user;
        if(!$user || !(Hash::check($request->password,$user->password)))
        {
            return redirect('user/login')->with('msg','Username or Password not found ');
        }
        else{
            if($user->verified ==0)
            {
                $request->session()->put('mailer',$user);
                Mail::to($user->email)->send(new VerifyMail($user));
                return view('user.verify');
            }
            elseif($user->verified ==2)
            {
                return redirect('user/login')->with('msg','Hello '.$user->firstname .' Your Account has been disabled . Kindly reach out to our customer care for activation');
            }
            else
            {
                $request->session('user')->put('user',$user);
                return redirect('/user'); 
            }
             
        }
        
    }

}
