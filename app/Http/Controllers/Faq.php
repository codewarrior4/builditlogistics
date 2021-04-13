<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faqs;
class Faq extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq= Faqs::latest()->paginate(1);
        return view('admin.faq',['faq'=>$faq]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
