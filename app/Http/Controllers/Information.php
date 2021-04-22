<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informations;

class Information extends Controller
{
   
    public function billing (Request $request)
    {
        $informations = Informations::where(['userid'=>session('user')->id])->get();
        if(count($informations)>0)
        {
            $information = Informations::where(['userid'=>session('user')->id])->first();
            $information->userid =session('user')->id;
            $information->baddress1 =$request->baddress1;
            $information->baddress2=$request->baddress2;
            $information->bcountry=$request->bcountry;
            $information->bcity=$request->bcity;
            $information->bemail=$request->bemail;
            $information->bphone=$request->bphone;
            $information->save();
            $request->session()->flash('msg','Billing Information Updated');
            return back();
        }
        else
        {
            $information = new Informations;
            $information->userid =session('user')->id;
            $information->baddress1 =$request->baddress1;
            $information->baddress2=$request->baddress2;
            $information->bcountry=$request->bcountry;
            $information->bcity=$request->bcity;
            $information->bemail=$request->bemail;
            $information->bphone=$request->bphone;
            $request->session()->flash('msg','Billing Information Added');
            $information->save();
            return back();
        }
    }

    public function shipping (Request $request)
    {
        $informations = Informations::where(['userid'=>session('user')->id])->get();
        if(count($informations)>0)
        {
            $information = Informations::where(['userid'=>session('user')->id])->first();
            $information->userid =session('user')->id;
            $information->saddress1 =$request->saddress1;
            $information->saddress2=$request->saddress2;
            $information->scountry=$request->scountry;
            $information->scity=$request->scity;
            $information->semail=$request->semail;
            $information->sphone=$request->sphone;
            $information->save();
            $request->session()->flash('msg','Shipping Information Updated');
            return back();
        }
        else
        {
            $information = new Informations;
            $information->userid =session('user')->id;
            $information->saddress1 =$request->saddress1;
            $information->saddress2=$request->saddress2;
            $information->scountry=$request->scountry;
            $information->scity=$request->scity;
            $information->semail=$request->semail;
            $information->sphone=$request->sphone;
            $request->session()->flash('msg','Shipping Information Added');
            $information->save();
            return back();
        }
    }

    public function index()
    {
        $information = Informations::where(['userid'=>session('user')->id])->first();
        return view('user.billing',compact('information'));
    }

}
