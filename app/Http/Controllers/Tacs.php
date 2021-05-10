<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAC;

class Tacs extends Controller
{
    public function index()
    {
        $tac = TAC::all()->first();
        return view('admin.tac',compact('tac'));
    }

    public function store(Request $request)
    {
        $tac = TAC::find($request->id);
         $tac->description = $request->description;
         $tac->save();
         session()->flash('msg','Terms And Conditions page updated');
         $tac = TAC::all()->first();
         return view('admin.tac',compact('tac'));
    }

    public function tac()
    {
        $tac = TAC::all()->first();
        return view('main.tac',compact('tac'));
    }
}
