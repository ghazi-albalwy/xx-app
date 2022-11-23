@extends('welcome')

@section('content')
    <div class="container">
    <h1 class="text-center">Edit category</h1>
    <form action="{{route('category.update',$category->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <label>Name :</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
            </div>
            <div class="col-md-12">
            <label>Description :</label>
            <textarea name="description" id="description" cols="50" rows="10" class="form-control">{{$category->description}}</textarea>
            </div>
            <div class="col-md-12">
            <button class="btn btn-success m-3">Update Data</button>
            </div>
        </div>
</form>
    </div>       
@endsection