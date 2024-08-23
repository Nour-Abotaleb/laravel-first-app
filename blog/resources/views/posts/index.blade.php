@extends('layouts.app')

@section('title')
    Blog
@endsection



@section("main")

<a href="{{route('posts.create')}}" class="btn" style="background-color: #1b991b; color: #ffffff; margin-left: 45%; padding: 15px; margin-top: 40px; margin-bottom: 20px; font-weight: bold;">Create Post </a>

<table class='table'>
                <tr> <th>ID</th> <th>Title</th> <th>Posted By</th> <th>Created At</th><th>Post's Image</th>
                <th>Actions</th>
        </tr>

              @foreach($posts as $post)
                <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->creator}}</td>
                        <td>{{$post->created_at}}</td>
                    
                        <td>
                            @if($post->image)
                                <img src="{{ asset('images/'.$post->image) }}" alt="Post Image" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                No Image Added
                            @endif
                         </td>
                        <td><a href="{{route('posts.show', $post->id)}}" style="padding: 10px 30px;" class='btn btn-info'> View </a> </td>
                    <td> <a href="{{route('posts.edit',$post->id)}}" style="margin-right: -30px; margin-left: -85px; padding: 10px 30px;" class="btn btn-primary">Edit</a></td>
                    <!-- <td><a href="{{route('posts.destroy', $post->id)}}"  style="padding: 10px 30px;"  class="btn btn-danger">Delete</a></td> -->
                   <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 10px 30px;"  class="btn btn-danger">Delete</button>
                        </form>
               
                   </td>

              
                </tr>

              @endforeach

</table>

<div style=" margin-top: 70px;">
     <!-- Pagination Links -->
     <div style="margin-left: 70px;">
        {{ $posts->links() }}
    </div>

</div>
@endsection



