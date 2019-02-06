@extends('layouts.main')


@section('content')

@if($flash=session('message'))
<div id="flash-message" class="alert alert-success" role
="alert">
{{$flash}}

@endif



<div class="w3-content w3-display-container" style="max-width:1500px">

<div class="w3-display-container mySlides">
  <img src="images/img_fjords.jpg" style="width:100%">
   <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <a href="{{url('pall')}}">Check out Our Products</a>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img_lights.jpg" style="width:100%">
   <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <a href="{{url('pall')}}">Check out Our Products</a>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img_mountains.jpg" style="width:100%">
   <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
   <a href="{{url('pall')}}">Check out Our Products</a>
  </div>
</div>


</div>
</div>




        <!-- Latest SHirts -->
        <div class="row">
            @forelse($shirts->chunk(14) as $chunk)

            @foreach($chunk as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.additem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt',$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                         {{$shirt->price}} taka
                    </h5>
                    <p>
                      {{$shirt->description}}
                    </p>
                </div>
            </div>

            @endforeach
             <div class="clearfix"></div>
            @empty
            <div class="got">
            <h2>no shirts</h2>
            </div>
            @endforelse
           
            </div>
        <!-- Footer -->

    


        <br>
        @endsection