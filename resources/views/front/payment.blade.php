@extends('layouts.main')

@section('content')
  
        <div class="container-fluid>
            <div class="roman">

<div class="col-md-6 col-md-offset-3">


    <h4> Through your Registered phone number we will communicate with you dear sir/mam</h4>

    <br>
<h5> submitt your dellivery</h5>

    
        {!!Form::open(['route'=>'payment.store','method' =>'post','files'=>'true'])!!}

     
    
  

  

  
    


{{Form::submit('Submitt delivery ',array('class'=>'btn btn-primary'))}}
        {!!Form::close()!!}
        <br>
    <br>
    <br>
    </div>
</div>
</div>
@endsection