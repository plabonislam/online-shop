<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cart;
use App\Order;

class CheckoutController extends Controller
{
  /* public function step1()
   {
   	if(Auth::check())
   		{
   			return redirect()->route('checkout.shipping');
   		}

   	return redirect('login');
   
   }	*/

   public function shipping()
   {

   	return view('front.shipping-info');
   }

public function payment()
    {
        return view('front.payment');
    }

    
   public function storePayment(Request $request)
   {

     session()->flash('message',' YOu have Succesfullly Orderd Your Product ');
      $user=Auth::user();
      $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=> 0
        ]);
       
$cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }
return redirect()->route('home');
   }
}
