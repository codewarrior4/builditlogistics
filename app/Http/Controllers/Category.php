<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;
use App\Models\SubCategorys;
use Illuminate\Support\Facades\File;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Categorys::latest()->get();
        return view('admin.category',compact('category'));

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Categorys;
        $category->title = $request->name;
        $photoName = date('Y_m_d_h_i_s').'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'),$photoName);
        $category->image= $photoName;
        $category->save();
        
        session()->flash('msg','New Category has been Added');
        $category = Categorys::latest()->get();
        return view('admin.category',compact('category'));

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
        $category = Categorys::find($id);
        $subcategory =SubCategorys::where(['catid'=>$id])->get();
        foreach ($subcategory as $subs)
        {
            $subs->delete();
        }
        $photo = $category->photo;
        if(File::exists(public_path('uploads/'.$photo)))
        {
            File::delete(public_path('uploads/'.$photo));
            $category->delete();
            $category = Categorys::latest()->get();
            session()->flash('msg',' Category has been Deleted');
            return view('admin.category',compact('category'));
            
        }
    }
}
