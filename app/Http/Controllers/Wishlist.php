<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlists;
use App\Models\Carts;

class Wishlist extends Controller
{
    public function wishList()
    {
        if(session('user') !="")
        {
            $wishlists = Wishlists::where(['userid'=>session('user')->id])
                    ->join('products','products.pid','=','wishlists.pid')
                    ->select('products.*',)
                    ->get();
                 $wishlists;    
            return view('main.wishlist',compact('wishlists'));
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        } 
    }

    public function moveToCart($pid,$quantity,$price)
    {
        if(session('user') !="")
        {
 
            
            $carts=Carts::where(['pid'=>$pid])->get();
            if(count($carts)>=1)
            {
                session()->flash('error','Product Item Already Exist In Cart');
                return back();
            }
            else
            {
                $wishlist = Wishlists::where(['userid'=>session('user')->id,'pid'=>$pid])->first();
                if($wishlist)
                {
                    $wishlist->delete();
                }
                $carts = new Carts;
                $carts->pid =$pid;
                $carts->price =$price;
                $carts->quantity =$quantity;
                $carts->userid =session('user')->id;
                $carts->save();
                session()->flash('info','Product Item has been Added');
                return back();
            }
           
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        }
    }

    public function remove($pid)
    {
        if(session('user') !="")
        {
            $wishlist = Wishlists::where(['userid'=>session('user')->id,'pid'=>$pid])->first();
            $wishlist->delete();
            session()->flash('success','Product Item has been removed');
            return back();
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        } 
    }
    
    static function wish()
    {
        if(session('user') !="")
        {
            $wishlists= Wishlists::where(['userid'=>session('user')->id])->get();
            $count=count($wishlists);
            return compact('count');
        }
        else
        {
            $count=0;   
            return compact('count');
        }
    }
}
