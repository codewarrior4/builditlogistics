<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categorys;
use App\Models\SubCategorys;
use App\Models\Sliders;
use App\Models\Socials;
use Illuminate\Support\Facades\DB;



class Main extends Controller
{
    
    static function index()
    {
        $categories =Categorys::all();
        $socials =Socials::get()->first();
        return compact('categories','socials');
        
    }

    public function category($id)
    {
        $cat =Categorys::find($id);
         $catname= $cat->title;
        $products = Products::where(['category'=>$id])->paginate(15);
        $categories =Categorys::all();
        $subs =SubCategorys::where(['catid'=>$id])->get();
        return view('main.category',compact('products','subs','catname'));
    }

    public function subcategory($id)
    {
        
         $products = DB::table('products')->where(['sub_category'=>$id])
                        ->join('categorys','products.category','=','categorys.id')
                        ->join('subcategory','products.sub_category','=','subcategory.id')
                        ->select('products.*','categorys.title','categorys.id','subcategory.name')
                        ->paginate(15);
            return view('main.categorysub',compact('products'));

    }

    public function homePage()
    {
        $sliders =Sliders::all();
        $latest =Products::orderBy('pid','desc')->limit(5)->get();
        $random =Products::orderByRaw('RAND()')->limit(3)->get();
        $featured = Products::orderByRaw('RAND()')->limit(3)->get();
        return view('main.index',compact('sliders','latest','random','featured'));
    }

    
}
