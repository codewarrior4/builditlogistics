<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faqs;
class Faq extends Controller
{
    
    public function faq()
    {
        $faqs= Faqs::latest()->paginate(10);
        return view('main.faq',['faqs'=>$faqs]);
    }

 
    public function create()
    {
        $faq= Faqs::latest()->paginate(10);
        return view('admin.faq',['faq'=>$faq]);
    }

    public function store(Request $request)
    {
        $faq = new Faqs;
        $faq->answer = $request->answer;
        $faq->question =$request->question;
        $faq->date = date('Y-m-d');

        $faq->save();
        session()->flash('msg','New Faq has been added');
        $faq= Faqs::latest()->paginate(1);
        return view('admin.faq',['faq'=>$faq]);
    }

    public function destroy($id)
    {
        //
        $faq =Faqs::find($id);
        $faq->delete();
        session()->flash('msg','Faq has been deleted');
        $faq= Faqs::latest()->paginate(1);
        return view('admin.faq',['faq'=>$faq]);

    }
}
