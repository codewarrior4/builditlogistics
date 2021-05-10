<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categorys;
use App\Models\SubCategorys;
use App\Models\Carts;
use App\Models\Wishlists;
use Illuminate\Support\Facades\DB;
class Product extends Controller
{

    public function index()
    {
        $products = DB::table('products')
                ->join('categorys','products.category','=','categorys.id')
                ->join('subcategory','products.sub_category','=','subcategory.id')
                ->select('products.*','categorys.title','categorys.id','subcategory.name')
                ->get();

        return view('admin.products',compact('products'));
    }

    public function create()
    {
        $cat= Categorys::all();
        $sub= SubCategorys::all();
        return view('admin.product',compact('cat','sub'));
    }


    public function store(Request $request)
    {
        $product = new Products;
        $product->pname= $request->name;
        $product->category= $request->category;
        $product->sub_category= $request->sub_category;
        $product->price= $request->price;
        $product->tag= $request->tag;
        $product->status=1;
        $product->compare_price= $request->compare_price;
        $product->description= $request->description;
        $product->percentage= $request->percentage;
        $banner = date('Y-m-d-H-i-s').'.'.$request->banner->extension();
        $request->banner->move(public_path('uploads'),$banner);
        $product->banner = $banner;
        $image1 = "image1".date('Y-m-d-H-i-s').'.'.$request->image1->extension();
        $request->image1->move(public_path('uploads'),$image1);
        $product->image1 = $image1;
        $image2 = "image2".date('Y-m-d-H-i-s').'.'.$request->image2->extension();
        $request->image2->move(public_path('uploads'),$image2);
        $product->image2 = $image2;
        $image3 = "image3".date('Y-m-d-H-i-s').'.'.$request->image3->extension();
        $request->image3->move(public_path('uploads'),$image3);
        $product->image3 = $image3;
        $product->views =0;
        $product->date = now();
        $product->save();

        $products = DB::table('products')
        ->join('categorys','products.category','=','categorys.id')
        ->join('subcategory','products.sub_category','=','subcategory.id')
        ->select('products.*','categorys.title','categorys.id','subcategory.name')
        ->get();

        return redirect()->to('admin/products/')->with('msg','New Product has been Added',compact('products'));

    }

    public function show($id)
    {
        $cat= Categorys::all();
        $sub= SubCategorys::all();
        $products = DB::table('products')
        ->join('categorys','products.category','=','categorys.id')
        ->join('subcategory','products.sub_category','=','subcategory.id')
        ->select('products.*','categorys.title','categorys.id','subcategory.name')
        ->where('pid','=',$id)
        ->first();

        
        return view('admin.productdetails',compact('products','cat','sub'));
    }

  
    public function update(Request $request)
    {
        //
        $product= Products::find($request->pid);
        $product->pname = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->tag = $request->tag;
        $product->percentage = $request->percentage;
        $product->compare_price = $request->compare_price;
        $product->category = $request->category;
        $product->sub_category = $request->sub_category;

        $product->save();
        $cat= Categorys::all();
        $sub= SubCategorys::all();
        $products = DB::table('products')
        ->join('categorys','products.category','=','categorys.id')
        ->join('subcategory','products.sub_category','=','subcategory.id')
        ->select('products.*','categorys.title','categorys.id','subcategory.name')
        ->where('pid','=',$request->pid)
        ->first();

        return redirect()->to('admin/products/'.$request->pid)->with('msg','Product Details has been Updated',compact('products','cat','sub'));

    }

    public function destroy($id)
    {
   
        $product = Products::find($id);
        $carts = Carts::where(['pid'=>$id])->get();
        foreach($carts as $cart)
        {
            $cart->delete();
        }
        $wishlists = Wishlists::where(['pid'=>$id])->get();
        foreach($wishlists as $wishlist)
        {
            $wishlist->delete();
        }
        $product->status =0;
        $product->save();
        
        session()->flash('msg','Product has been Deleted');
        return back();
    }

    public function activate($id)
    {
   
        $product = Products::find($id);
        $product->status =1;
        $product->save();
        session()->flash('msg','Product has been Activated');
        return back();
    }

    public function singleproducts($id)
    {
        $product = Products::where(['pid'=>$id])->first();
        if($product =="" || $product->status ==0)
        {
            session()->flash('product','Product Does not exist');
            $products= Products::where('status','=',1)
                        ->orderBy('pid','desc')->paginate(15);
            return view('main.products',compact('products'));
        }
        else
        {
            $product = Products::where(['pid'=>$id])->first();
            $views= $product->views;
            $product->views =$views +1;
            $product->save();
            $product = Products::find($id);
            $text = $product->pname;
            return view('main.productdetails',compact('product'));
        }

    }
    
    public function allproducts()
    {
        $products= Products::where('status','=',1)
                   ->orderBy('pid','desc')->paginate(15);
        return view('main.products',compact('products'));
    }
}
