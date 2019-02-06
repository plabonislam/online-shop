@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>

<ul class="container">
    @forelse($products as $product)
    <li class="row">


       <div class="col-md-8">
        <h4>Name of product:{{$product->name}}</h4>
     
    
      <br>

        <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
         </form>
</div>
         <div class="col-md-4">
            
          <!--  <form action="/admin/product/image-upload/{{$product->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$product->id}}">
              {{csrf_field()}}

             </form>
           -->

        </div>

    </li>

        @empty

        <h3>No products</h3>

    @endforelse
</ul>


@endsection