<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::latest()->paginate(5);
        return view('admin.blogs',compact('blogs'));
        return redirect('/admin/blogs')->with('msg','Blog has been Updated',compact('blogs'));

    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog= new Blogs;
        $blog->title= $request->input('title');
        $blog->description= $request->input('description');
        $photoName = date('Y_m_d_h_i_s').'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'),$photoName);
        $blog->image= $photoName;
        $blog->save();
        
        $blogs = Blogs::latest()->paginate(5);
        session()->flash('msg','New Blog has been Added');

        return view('admin.blogs',compact('blogs'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blogs::find($id);
        return view('admin.blogdetails',compact('blog'));
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog = Blogs::find($request->id);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->save();
        $blogs = Blogs::latest()->paginate(5);  
        session()->flash('msg',' Blog has been Updated');
        return view('admin.blogs',compact('blogs'));
        return redirect()->to('/admin/blogs')->with('msg','Blog has been Updated',compact('about'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blogs::find($id);
        $photo = $blog->photo;
        if(File::exists(public_path('uploads/'.$photo)))
        {
            File::delete(public_path('uploads/'.$photo));
            $blog->delete();
            $blogs = Blogs::latest()->paginate(5);
            session()->flash('msg',' Blog has been Deleted');
            return view('admin.blogs',compact('blogs'));
        }

    }
}
