<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Payments;
use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Sliders;
use App\Models\Users;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{
    //
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        //getPayment Data
        // dd($paymentData);
        $paymentData = Paystack::getPaymentData();
        // check status
        // dd($paymentData);
        if($paymentData['status'] == true)
        {
            $email = $paymentData['data']['customer']['email'];
            // //get userid and store order
            $user= Users::where('email','=',$email)->first();
            $payment = new Payments;
        
            $payment->userid = $user->id;
            $payment->email = $email;
            $payment->paymentid = $paymentData['data']['id'];
            $payment->amount = $paymentData['data']['amount']/100;
            $payment->time=$paymentData['data']['paidAt'];
            $payment->reference=$paymentData['data']['reference'];
            $payment->save();
            // Payment details saved successfully

            // Move items from cart to order  
            $carts = Carts::where('userid','=',$user->id)->get();
            foreach($carts as $cart)
            {
                $order = new Orders;
                $order->userid = $cart->userid;
                $order->paymentid = $payment->paymentid;
                $order->price =$cart->price;
                $order->pid = $cart->pid;
                $order->quantity = $cart->quantity;
                $order->save();
                $cart->delete();
            }
            session()->flash('success','Your order is now complete');
            $sliders =Sliders::all();
            $latest =Products::orderBy('pid','desc')->limit(5)->get();
            $random =Products::orderByRaw('RAND()')->limit(3)->get();
            $featured = Products::where(['tag'=>'featured'])->orderBy('pid','desc')->limit(5)->get();
            $hots = Products::where(['tag'=>'hot'])->orderBy('pid','desc')->limit(5)->get();
            return view('main.index',compact('sliders','latest','random','featured','hots'));


            
        }
      
    }
}
