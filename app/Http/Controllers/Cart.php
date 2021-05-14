<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Wishlists;
use Illuminate\Http\Request;

class Cart extends Controller
{
    public function addtocart($pid,$quantity,$price)
    {
        if(session('user') !="")
        {
            $check = Carts::where(['pid'=>$pid])->get();
            if(count($check) ==0)
            {
                $cart = new Carts;
                $cart->userid = session('user')->id;
                $cart->price =$price;
                $cart->quantity =$quantity;
                $cart->pid= $pid;
                $cart->save();
                session()->flash('success','Product has been added to cart');
                return back();
            }
            else
            {
                session()->flash('error','Product already exist in cart');
                return back();
                //return cart already there
            }
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to add to cart');
        }
    }

    public function addCart(Request $request)
    {
        if(session('user') !="")
        {
            $check = Carts::where(['pid'=>$request->pid])->get();
            if(count($check) ==0)
            {
                $cart = new Carts;
                $cart->userid = session('user')->id;
                $cart->price =$request->price;
                $cart->quantity =$request->quantity;
                $cart->pid= $request->pid;
                $cart->save();
                session()->flash('success','Product has been added to cart');
                return back();
            }
            else
            {
                session()->flash('error','Product already exist in cart');
                return back();
                //return cart already there
            }
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to add to cart');
        } 
    }

    public function cartList()
    {
        if(session('user') !="")
        {
            $carts = Carts::where(['userid'=>session('user')->id])
                    ->join('products','products.pid','=','carts.pid')
                    ->select('products.*','carts.quantity')
                    ->get();
                    // return $carts;
            return view('main.cart',compact('carts'));
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
            $carts = Carts::where(['userid'=>session('user')->id,'pid'=>$pid])->first();
            $carts->delete();
            session()->flash('success','Product Item has been removed');
            return back();
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        } 
    }

    public function moveToWishlist($pid,$price)
    {
        if(session('user') !="")
        {
            $wishlist=Wishlists::where(['pid'=>$pid])->get();
            if(count($wishlist)>=1)
            {
                session()->flash('error','Product Item Already Exist In wishlist');
                return back();
            }
            else
            {
                $carts = Carts::where(['userid'=>session('user')->id,'pid'=>$pid])->first();
                if($carts)
                {
                  $carts->delete();  
                }
                $wishlists = new Wishlists;
                $wishlists->pid =$pid;
                $wishlists->price =$price;
                $wishlists->userid =session('user')->id;
                $wishlists->save();
                session()->flash('info','Product Item has been removed');
                return back();
            }
           
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        } 
    }

    public function clearCart()
    {
        if(session('user') !="")
        {
            $carts = Carts::where(['userid'=>session('user')->id])->get();
            foreach($carts as $cart)
            {
             $cart->delete();   
            }
            session()->flash('success','All Items in Cart has been cleared');
            return back();
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        } 
            
    }

    public function update(Request $request)
    {
        if(session('user') !="")
        {
            $carts = Carts::where(['userid'=>session('user')->id,'pid'=>$request->pid])->first();
            
            $carts->quantity = $request->quantity;
            $carts->save();
            session()->flash('success','Cart has been updated');
            return back();
        }
        else
        {
            return redirect('/user/login')->with('msg','You have to be logged in to Access this page');
        } 
    }

     static function cart()
    {
        if(session('user') !="")
        {
            $carts= Carts::where(['userid'=>session('user')->id])->get();
            $count=count($carts);
            $total =array();
            foreach($carts as $cart)
            {
                $totals =($cart->price * $cart->quantity);
                array_push($total,$totals);
            }
            // dd($total);
            $sum=array_sum($total);
            // dd($sum);
            return compact('count','sum');
        }
        else
        {
            $count=0;
            $sum =0;    
            return compact('count','sum');
        }
        
    }
}
