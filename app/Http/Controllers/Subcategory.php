<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategorys;
use App\Models\Categorys;
use Illuminate\Support\Facades\DB;

class Subcategory extends Controller
{
    //
    public function index()
    {
        $subs= Categorys::all();
        $cats = DB::table('subcategory')
                ->join('categorys','subcategory.catid','=','categorys.id')
                ->get();
        
        return view('admin.category_sub',compact('subs','cats'));
        // return view('admin.category_sub',compact('subs'));
    }

    public function create (Request $request)
    {
        $subcategory = new SubCategorys;
        $subcategory->name = $request->name;
        $subcategory->catid = $request->catid;
        $subcategory->save();

        session()->flash('msg','New Sub Category has been Added');
        $cats = DB::table('subcategory')
        ->join('categorys','subcategory.catid','=','categorys.id')
        ->get();
        $subs= Categorys::all();
        return view('admin.category_sub',compact('subs','cats'));
    }

    public function destroy($id)
    {
        $subcategory = SubCategorys::find($id);
        $subcategory->delete();
        session()->flash('msg',' Sub Category has been Deleted');
        $cats = DB::table('subcategory')
        ->join('categorys','subcategory.catid','=','categorys.id')
        ->get();
        $subs= Categorys::all();
        return view('admin.category_sub',compact('subs','cats'));

    }
}
