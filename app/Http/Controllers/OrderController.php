<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function Orders($type='')
    {
        if($type =='pending'){
            $orders=Order::where('delivered','0')->get();
        }elseif ($type == 'delivered'){
            $orders=Order::where('delivered','1')->get();
        }else{
            $orders=Order::all();
        }

        $users = DB::table('addresses')
            ->join('orders', 'addresses.user_id', '=', 
            	'orders.user_id')
            ->join('order_product', 'orders.id', '=', 
            	'order_product.order_id')
            ->select('addresses.phone', 'orders.total')
            ->get();
        return view('admin.orders',compact(['orders','users']));
    }


    public function toggledeliver(Request $request,$orderId)
    {
        $order=Order::find($orderId);
       if($request->has('delivered')){
          // $time=Carbon::now()->addMinute(1);
          //  Mail::to($order->user)->later($time,new OrderShipped($order));
            $order->delivered=$request->delivered;
       }else{
           $order->delivered="0";
        }
        $order->save();
        return back();
    }
}
