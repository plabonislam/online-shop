<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','RangpurHutshop')
    </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>




    <div  class="top-bar">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{route('home')}}">
                   
                  
                    Rangpur-Hut
                </a>
            </h4>

        </div>

        <div class="top-bar-right">
            <ol class="menu">
                
                 
            
                      

                <li>
                    <a href="{{route('cart.index')}}">
                        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                        </i>
                        CART
                        <span class="alert badge">
                            {{ Cart::count()}}
                        </span>
                    </a>
                </li>
            </ol>
        </div>


    </div>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Menz Collection
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('tshirts')}}">shirt</a>
        <a class="dropdown-item" href="{{route('punjabi')}}">Punjabi</a>
        <a class="dropdown-item" href="{{route('shirts')}}">Tshirt</a>
         <a class="dropdown-item" href="{{route('Pent')}}">Pant</a>
         <a class="dropdown-item" href="{{route('other')}}">Other</a>

         <a class="dropdown-item" href="{{route('all')}}">ALL Collection of Men</a>
      </div>
    </li>


    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Ladies Collection
      </a>
      <div class="dropdown-menu">
       
        
        <a class="dropdown-item" href="{{route('Sharee')}}">Dress</a>
      </div>
    </li>
    @if(!Auth::check())

<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Sign Up <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                   <a class="dropdown-item" href="{{route('login')}}">Login</a>
                            <a class="dropdown-item" href="{{route('register')}}">Regester</a>

                                </div>
</li>
   
   @endif 
    @if(Auth::check())

<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
   @endif

  </ul>
</nav>


@yield('content')


<footer class="footer">

  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p></p>
  </div>
  <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
     
      <ul class="footer-links">
  
        
        </ul>
  </div>

  <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">

        <li> <h5><a href="https://m.facebook.com/rangpurhut/">Facebook</a></h5></li>
        <p>contact 01784982600</p>
        </ul>
        </div>
    </div>
</footer>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="dist/js/vendor/jquery.js"></script>
<script src="dist/js/app.js"></script>

</body>
</html>
