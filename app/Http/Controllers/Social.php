<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socials;

class Social extends Controller
{
    public function index()
    {
        $social = Socials::get()->first();
        return view('admin.social',compact('social'));

    }
    public function create (Request $request)
    {
        $social = Socials::find($request->id);
        $social->instagram = $request->instagram;
        $social->twitter = $request->twitter;
        $social->facebook = $request->facebook;
        $social->linkedin = $request->instagram;
        $social->save();
        session()->flash('msg','Social media links has been updated');
        $social = Socials::get()->first();
        return view('admin.social',compact('social'));
    }
}
