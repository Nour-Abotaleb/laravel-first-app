@extends('layouts.app')

@section('main')
    <h1> Add New Post </h1>

    <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">

        @csrf

 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
      
        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post Creator</label>
            <input type="text" class="form-control"  name="creator" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" class="form-control"  name="image" aria-describedby="emailHelp">
        </div>
   

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
