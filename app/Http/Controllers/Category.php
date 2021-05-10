<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;
use App\Models\SubCategorys;
use Illuminate\Support\Facades\File;

class Category extends Controller
{
    
    public function index()
    {
        $category = Categorys::latest()->get();
        return view('admin.category',compact('category'));

    }

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
