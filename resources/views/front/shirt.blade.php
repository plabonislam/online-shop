@extends('layouts.main')
@section('title','shirt')




@section('content')
     <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                       <a href="#">
                            <img src="{{asset("images/$product->image")}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                     <h4class="subheader">
                    <span class="price-tag">{{$product->price}} taka</span>
                </h4>
                
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        M
                                    </option>
                                    <option value="medium">
                                        L
                                    </option>
                                    <option value="large">
                                        XL
                                    </option>

                                     <option value="small">
                                        XLL
                                    </option>
                                    <option value="pmedium">
                                        28
                                    </option>
                                    <option value="plarge">
                                        30
                                    </option>
                                     <option value="psmall">
                                        32
                                    </option>
                                    <option value="pdouble medium">
                                        34
                                    </option>
                                    <option value="p extra large">
                                        36
                                    </option>
                                     <option value="punmedium">
                                        38
                                    </option>
                                    <option value="semi pun large">
                                        40
                                    </option>
                                     <option value="large pun ">
                                        42
                                    </option>
                                    <option value="extra pun">
                                        44
                                    </option>
                                    <option value="pun do large">
                                        46
                                    </option>
                                   
                                </select>
                            </label>

                            <p class="subheade">
                    <span class="price-tag">About::))  {{$product->description}} </span>
                </p>
                            <a href="{{route('cart.additem',$product->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
@endsection
