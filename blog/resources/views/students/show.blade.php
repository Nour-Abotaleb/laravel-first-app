@extends("layouts.app")


@section("main")


<div class="card" style="width: 30rem; margin-top: 30px;">
<p style="background-color: #bebebe; padding: 20px;">Post Info</p>
<img src="{{ asset('images/'.$student->image) }}" height="300px" style="margin-top: -20px" alt="...">


    <div class="card-body">
        <p class="card-text">Title: {{$student->title}}</p>
        <p class="card-text">Description: {{$student->description}}</p>
        <a href="{{route('students.index')}}" class="btn btn-primary">Back to posts</a>
    </div>
    
</div>
<div class="card" style="width: 30rem; margin-top: 30px;">
<p style="background-color: #bebebe; padding: 20px;">Post Creator Info</p>
   
    <div class="card-body">
        <h5 class="card-title" style="margin-bottom: 20px;" >Name: {{$student->creator}}</h5>
        <p class="card-text">Email: {{$student->email}}</p>
        <p class="card-text">Created At: {{ \Carbon\Carbon::parse($student->created_at)->format('l jS \\of F Y h:i:s A') }}</p>        
        <a href="{{route('students.index')}}" class="btn btn-primary">Back to posts</a>
    </div>
    
</div>

@endsection
