<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categorys;
use App\Models\SubCategorys;
use App\Models\Sliders;
use App\Models\Socials;
use App\Models\Carts;
use App\Models\Informations;
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
        $featured = Products::where(['tag'=>'featured'])->orderBy('pid','desc')->limit(5)->get();
        $hots = Products::where(['tag'=>'hot'])->orderBy('pid','desc')->limit(5)->get();
        return view('main.index',compact('sliders','latest','random','featured','hots'));
    }

    public function search(Request $request)
    {
        $text =$request->text;
        $products =Products::where('category','=',$request->catid)
                    ->where('pname','LIKE','%'. $text.'%')
                    ->get();
        return view('main.productsearch',compact('products'));
    }

    public function checkout()
    {
        if(session('user') !="")
        {
             $carts = Carts::where(['userid'=>session('user')->id])
                    ->join('products','products.pid','=','carts.pid')
                    ->select('products.*','carts.quantity')
                    ->get();
               $information =Informations::where('userid','=',session('user')->id)->first();
              
               if($information ==null)
               {
                   $information='';
               }
            //    dd($information);
            // return $information;
            return view('main.checkout',compact('carts','information'));
        }
        else
        {
            session()->flash('msg','You are not logged in');
            return view('main.login');
        }
    }
}
