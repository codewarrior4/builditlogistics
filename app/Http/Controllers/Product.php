<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categorys;
use App\Models\SubCategorys;
use Illuminate\Support\Facades\DB;
class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
                ->join('categorys','products.category','=','categorys.id')
                ->join('subcategory','products.sub_category','=','subcategory.id')
                ->select('products.*','categorys.title','categorys.id','subcategory.name')
                ->get();

        return view('admin.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat= Categorys::all();
        $sub= SubCategorys::all();
        return view('admin.product',compact('cat','sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products;
        $product->pname= $request->name;
        $product->category= $request->category;
        $product->sub_category= $request->sub_category;
        $product->price= $request->price;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $product->delete();
        $products = DB::table('products')
        ->join('categorys','products.category','=','categorys.id')
        ->join('subcategory','products.sub_category','=','subcategory.id')
        ->select('products.*','categorys.title','categorys.id','subcategory.name')
        ->get();
        session()->flash('msg','Product has been Deleted');
        return view('admin.products',compact('products'));
    }

    public function singleproducts($id)
    {
        $product = Products::find($id);
        if($product ==0)
        {
            session()->flash('product','Product Does not exist');
            $products= Products::orderBy('pid','desc')->paginate(15);
            return view('main.products',compact('products'));
        }
        else
        {
            $views= $product->views;
            $product->views =$views +1;
            $product->save();
            $product = Products::find($id);
            return view('main.productdetails',compact('product'));
        }

    }
    
    public function allproducts()
    {
        $products= Products::orderBy('pid','desc')->paginate(15);
        return view('main.products',compact('products'));
    }
}
