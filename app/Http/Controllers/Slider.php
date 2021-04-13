<?php

namespace App\Http\Controllers;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Slider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders=Sliders::latest()->get();
        return view('admin.slider',compact('sliders'));
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $slider =new Sliders;
        $photoName = date('Y-m-d').'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'),$photoName);
        $slider->header= $request->header;
        $slider->detail= $request->detail;
        $slider->url= $request->url;
        $slider->button= $request->button;
        $slider->photo=$photoName;
        $slider->save();

        $sliders=Sliders::latest()->get();
        session()->flash('msg','New Slider has been Added');

        return view('admin.slider',compact('sliders'));

    }

       
  
    public function destroy($id)
    {
        //
        $slider = Sliders::find($id);
        $photo=$slider->photo;
        if(File::exists(public_path('uploads/'.$photo)))
        {
            File::delete(public_path('uploads/'.$photo));
            $slider->delete();
            $sliders=Sliders::latest()->get();
            session()->flash('msg','Slider has been Deleted');

            return view('admin.slider',compact('sliders'));
        }
        
    }
}
