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

        session()->flash('msg','New Product has been Added');
        return view('admin.products',compact('products'));
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
