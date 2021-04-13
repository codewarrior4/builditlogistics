<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stores;

class store extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.store');
    }



    public function store(Request $request)
    {
        $stores = new Stores;
        $stores->location= $request->location;
        $stores->details= $request->details;
        $stores->number= $request->number;

        $stores->save();
        session()->flash('msg','New Store has been Added');
        $stores = Stores::all();
        return view('admin.stores',compact('stores'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $stores = Stores::all();
        return view('admin.stores',compact('stores'));
    }

    public function destroy($id)
    {
        $stores = Stores::find($id);
        $stores->delete();
        session()->flash('msg','Store has been Deleted');
        $stores = Stores::all();
        return view('admin.stores',compact('stores'));
    }
}
