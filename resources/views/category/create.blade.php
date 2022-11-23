@extends('welcome')

@section('content')
    <div class="container">
    <h1 class="text-center">Create category</h1>
    <form action="{{route('category.store')}}" method="post">
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
            <button class="btn btn-success m-3">Save Data</button>
            </div>
        </div>
</form>
    </div>       
@endsection