<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\Users;
use App\Models\Informations;
use App\Models\Ordermessages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailForOrder;

class Order extends Controller
{
   
    public function adminOrders()
    {
        $payments = Payments::latest()->get();
        return view('admin.orders',compact('payments'));
    }

    public function adminOrderDetails($paymentid)
    {
        $payments =Payments::where('paymentid','=',$paymentid)->first();
        $payments->status ="true";
        $payments->save();

        $orders =Orders::where(['paymentid'=>$paymentid])
            ->join('products','orders.pid','=','products.pid')
            ->join('users','users.id','=','orders.userid')
            // ->join('informations','informations.userid','=','users.id')
            ->select('products.*','orders.*','users.id')
            ->get();
        $total =array();
        foreach($orders as $order)
        {
            $totals =($order->price * $order->quantity);
            array_push($total,$totals);
        }
        $messages =Ordermessages::where(['orderid'=>$paymentid])->latest()->get();
        $sum=array_sum($total);
        $userid =$orders[0]['id'];
        $user =Users::find($userid);
        $information =Informations::where('userid','=',$userid)->first();
        return view('admin.orderdetails',compact('orders','user','information','sum','messages'));
    }

    public function adminUpdate(Request $request)
    {
        $orders = Orders::where('paymentid','=',$request->paymentid)->get();
        foreach ($orders as $order)
        {
            // echo $order->status =$request->status;
            DB::table('orders')
                    ->where('paymentid',$order->paymentid)
                    ->update(['status'=>$request->status]);
         
        }
        session()->flash('msg','Order Status Updated');
        return back();
    }

    public function userOrder()
    {
        $orders = Payments::where('userid','=',session('user')->id)->latest()->paginate(10);
        return view('user.orders',compact('orders'));
    }

    public function userOrderDetails($paymentid)
    {
        $payments =Payments::where('paymentid','=',$paymentid)->first();
        $payments->status ="true";
        $payments->save();

        $orders =Orders::where(['paymentid'=>$paymentid])
            ->join('products','orders.pid','=','products.pid')
            ->join('users','users.id','=','orders.userid')
            // ->join('informations','informations.userid','=','users.id')
            ->select('products.*','orders.*','users.id')
            ->get();
        $messages =Ordermessages::where(['orderid'=>$paymentid])->latest()->get();
        $total =array();
        foreach($orders as $order)
        {
            $totals =($order->price * $order->quantity);
            array_push($total,$totals);
        }
        $sum=array_sum($total);

        return view('user.orderdetails',compact('orders','sum','messages'));
    }

    public function sendMessage(Request $request)
    {
        $orderMessage = new Ordermessages;
        $orderMessage->subject =$request->subject;
        $orderMessage->message =$request->message;
        $orderMessage->email =$request->toemail;
        $orderMessage->userid =$request->userid;
        $orderMessage->orderid =$request->paymentid;
        $orderMessage->status ='sent';
        $orderMessage->save();

        session()->flash('msg','Message Sent to customer');
        return back();
    }

    public function deleteMessage($id)
    {
        $orderMessage = Ordermessages::find($id);
        $orderMessage->delete();
        session()->flash('msg',"Message Has been deleted");
        return back();
    }

}
