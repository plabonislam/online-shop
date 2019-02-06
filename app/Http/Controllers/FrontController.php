<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {


         $shirts=Product::all();
    	return view('front.home',compact('shirts'));
    }

public function pall()//for all products
    {
        $shirts=Product::all();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }
     public function shirts()//for all tshirts
    {
        $shirts = DB::table('products')->where('name', 'Tshirt')->get();
        //$shirts=Product::all();
    	return view('front.shirts',compact('shirts'));
    }

    public function all()//for all other
    {
        $shirts = DB::table('products')->where('category_id','=', 1)->get();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }


     public function other()//for all other
    {
        $shirts = DB::table('products')->where('name', 'Other')->get();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

     public function tshirts()//for all shirts
    {
        $shirts = DB::table('products')->where('name', 'Shirt')->get();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }
    public function punjabi()//for all punjabii
    {
        $shirts = DB::table('products')->where('name', 'Punjabi')->get();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

    public function Pent()//for all punjabii
    {
        $shirts = DB::table('products')->where('name', 'Pent')->get();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

     public function Sharee()//for all punjabii
    {
        $shirts = DB::table('products')->where('name', 'Sharee')->get();
        //$shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

     public function shirt(Product $product)//for single product of shirt
    {
    	return view('front.shirt',compact('product'));
    }

}
