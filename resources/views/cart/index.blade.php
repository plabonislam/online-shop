@extends('layouts.main')

@section('content')
   <div class="row">
     <div class="row">
        <h3>Cart Items</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>size</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                  
                    

                     <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                       
                    </td>

                          <td>
                        <div > {!! Form::select('size', ['small'=>'S','medium'=>'M','large'=>'L','large'=>'XL','extra large'=>'xxl','pentsmall'=>'28','pentmedium'=>'30','pentsemi'=>'32','pentdouble'=>'34','pentdouble standard'=>'34','ultimate double'=>'36','punmedium'=>'38','punjsemi'=>'40','punjdouble'=>'42','punjdouble standard'=>'44','ultimate double'=>'46','heig-ultimate double'=>'48'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                           </div>

                    </td>

                        
                    
                    
                  

                        <td>
                             <input style="float: left"  type="submit" class="button success small" value="Ok">
                             {!!Form::close()!!}
                    <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                     </td>
                </tr>
            @endforeach
        <tr>
                <td></td>
                <td>
                    Tax: ${{Cart::tax()}} <br>
                    Sub Total: $ {{Cart::subtotal()}} <br>
                    Grand Total: $ {{Cart::total()}}
                </td>
                <td>Items: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.shipping')}}" class="button">Checkout</a>
    </div>
   </div>



@endsection