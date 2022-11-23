@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="text-center">Product</h1>

@if(session()->has('success'))
  <div class ="alert alert-success">{{session()->get('success')}}</div>
@endif

<div class="row">
    <div class="col-md-12">
    <a href="{{route('product.create')}}" class="btn btn-success m-3">Create</a> <!--صحيح-->
    <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                    <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->Price}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->created_at}}</td>
                    
                    </td>
                </tr>
                        @endforeach              
                </tbody>
            </table>
        </div>
    </div>
</div>  
@endsection
