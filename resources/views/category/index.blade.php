@extends('welcome')

@section('content')
<h1 class="text-center">Category</h1>

@if(session()->has('success'))
  <div class ="alert alert-success">{{session()->get('success')}}</div>
@endif
<div class="row">
    <div class="col-md-12">
    <a href="{{route('category.create')}}" class="btn btn-success m-3">Create</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Created date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>{{$category->created_at}}</td>
      <td>
        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>

       <form action="{{route('category.destroy',$category->id)}}" method="post">
          @csrf
          @method('delete')
          <button type="submit"class="btn btn-danger">Delete</button>
      </form>
        
      </td>
    </tr>
    @endforeach
                
            </tbody>
        </table>
    </div>
   </div>
</div>  
@endsection