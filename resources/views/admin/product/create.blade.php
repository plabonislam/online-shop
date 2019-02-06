@extends('admin.layout.admin')
@section('content')
    <h3>product</h3>
    <div class="row">
<div class="col-md-6 col-md-offset-3">
    	{!!Form::open(['route'=>'product.store','method' =>'post','files'=>'true'])!!}

    	<div class="form-group">
    		{{Form::label('name','Name')}}
    		
        {{Form::select('name',['Tshirt'=>'Tshirt','Punjabi'=>'Punjabi','Shirt'=>'Shirt',
        'Pent'=>'Pent','Sharee'=>'Sharee','Other'=>'Other'],null,
        ['class'=>'form-control'])}}
    
  </div>
  <div class="form-group">
    		{{Form::label('description','Description')}}
    		{{Form::text('description',null,array('class'=>'form-control'))}}
    
  </div>

    	<div class="form-group">
    		{{Form::label('size','Size')}}
    		{{Form::select('size',['small'=>'m','medium'=>'L','large'=>'XL','extra large'=>'xxl','pentsmall'=>'28','pentmedium'=>'30','pentsemi'=>'32','pentdouble'=>'34','pentdouble standard'=>'34','ultimate double'=>'36','punmedium'=>'38','punjsemi'=>'40','punjdouble'=>'42','punjdouble standard'=>'44','ultimate double'=>'46','heig-ultimate double'=>'48'],null,
    		['class'=>'form-control'])}}
    
  </div>

  <div class="form-group">
        {{Form::label('price','Price')}}
        {{Form::text('price',null,array('class'=>'form-control'))}}
    
  </div>

  <div class="form-group">
    		{{Form::label('category_id','Categories')}}
    		{{Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'
    		=>'select cat'])}}
    	</div>

  <div class="form-group">
    		{{Form::label('image','Image')}}
    		{{Form::file('image',array('class'=>'form-control'))}}
    
  </div>

  
    


{{Form::submit('done',array('class'=>'btn btn-default'))}}
    	{!!Form::close()!!}
    </div>
</div>
@endsection