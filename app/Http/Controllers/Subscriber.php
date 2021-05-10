<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Subscribers;

class Subscriber extends Controller
{
    
    public function index()
    {
        $subscribers = Subscribers::latest()->get();
        return view('admin.subscribers',compact('subscribers'));
    }

    public function store(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'email' => 'email|required'

        ]);
        $email=$req->email;
        if ($validator->passes())
        {
            $subscriber= new Subscribers;
            $subscriber->email=$email;
            $subscriber->save();
            return response()->json(['success'=>array('You have Successfully subscribed to our newsletter')]);
            
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
    }

}
