@extends('layouts.main')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Shipping Info</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
       
        
        
        

        {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection