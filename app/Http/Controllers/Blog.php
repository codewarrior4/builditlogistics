<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Blog extends Controller
{
    
    public function index()
    {
        $blogs = Blogs::latest()->paginate(5);
        return view('admin.blogs',compact('blogs'));
        return redirect('/admin/blogs')->with('msg','Blog has been Updated',compact('blogs'));

    }

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

    public function blog(){
        $blogs = Blogs::latest()->paginate(10);
        return view('main.blog',compact('blogs'));
    }

    public function blogdetails($id)
    {
        
        $blog = Blogs::find($id);

        $comments = Comments::where(['blogid'=>$id])
                    ->join('users','comments.userid','=','users.id' )
                    ->select('comments.*','users.firstname','users.lastname')
                    ->get();

        return view('main.blogdetails',compact('blog','comments'));
    }

    public function show($id)
    {
        $blog = Blogs::find($id);
        return view('admin.blogdetails',compact('blog'));
    }

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

    public function comment(Request $request)
    {
        $comment = new Comments;
        $comment->blogid =$request->blogid;
        $comment->comment =$request->comment;
        $comment->userid =session('user')->id;

        $comment->save();
        return back();
    }
}
