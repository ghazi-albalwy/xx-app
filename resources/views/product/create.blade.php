@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Create Product</h1>
    <form action="{{route('product.store')}}" method="post"><!--صحيح-->
        @csrf
        <div class="row">
            <div class="col-md-12">
                <label>Name :</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
                <div class="col-md-12">
                <label>Description :</label>
                <textarea name="description" id="description" cols="50" rows="10" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label>Price :</label>
                <input type="number" name="price" step="0.1" id="price" class="form-control">
            </div>

            <div class="col-md-12"><!--صحيح-->
                <label>Category :</label><!--صحيح-->
                <select name="category_id" id="category_id" class="form-control"><!--صحيح-->
                   @foreach($categories as $category) <!--صحيح-->
                   <option value="{{$category->id}}">{{$category->name}}</option><!--صحيح-->
                   @endforeach<!--صحيح-->
                </select><!--صحيح-->
            </div>


            <div class="col-md-12">
            <button class="btn btn-success m-3">Save Data</button>
            </div>
        </div>
    </form>
</div>       
@endsection