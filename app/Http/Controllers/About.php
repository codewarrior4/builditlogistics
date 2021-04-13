<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;
class About extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Aboutus::all()->first();
        return view('admin.about',compact('about'));
    }

    

    public function store(Request $request)
    {
        $about = Aboutus::find($request->id);
         $about->description = $request->description;
         $about->save();
         session()->flash('msg','About us page updated');
         $about = Aboutus::all()->first();
         return view('admin.about',compact('about'));
    }

}
