@extends("layouts.app")


@section("main")


<div class="card" style="width: 30rem; margin-top: 30px;">
<p style="background-color: #bebebe; padding: 20px;">Post Info</p>
<img src="{{ asset('images/'.$post->image) }}" height="300px" style="margin-top: -20px" alt="...">


    <div class="card-body">
        <p class="card-text">Title: {{$post->title}}</p>
        <p class="card-text">Description: {{$post->description}}</p>
        <a href="{{route('posts.index')}}" class="btn btn-primary">Back to posts</a>
    </div>
    
</div>
<div class="card" style="width: 30rem; margin-top: 30px;">
<p style="background-color: #bebebe; padding: 20px;">Post Creator Info</p>
   
    <div class="card-body">
        <h5 class="card-title" style="margin-bottom: 20px;" >Name: {{$post->creator}}</h5>
        <p class="card-text">Email: {{$post->email}}</p>
        <p class="card-text">Created At: {{ \Carbon\Carbon::parse($post->created_at)->format('l jS \\of F Y h:i:s A') }}</p>        
        <a href="{{route('posts.index')}}" class="btn btn-primary">Back to posts</a>
    </div>
    
</div>

@endsection
