@extends('layouts.app')

@section('title')
    Blog
@endsection



@section("main")

    <a href="{{route('students.create')}}" class="btn" style="background-color: green; color: #ffffff; margin-left: 45%; padding: 15px; margin-top: 40px; margin-bottom: 20px;">Create Post </a>

<table class='table'>
                <tr> <th>ID</th> <th>Title</th> <th>Posted By</th> <th>Created At</th>
                <th>Actions</th>
        </tr>

              @foreach($students as $student)
                <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->title}}</td>
                        <td>{{$student->creator}}</td>
                        <td>{{$student->created_at}}</td>
                          <!-- <td> <img src='{{asset("images/students/".$student->image)}}' width="100" height="100"></td> -->
                        <td><a href="{{route('students.show', $student->id)}}" style="padding: 10px 30px;" class='btn btn-info'> View </a> </td>
                    <td> <a href="{{route('students.edit',$student->id)}}" style="margin-right: -30px; margin-left: -85px; padding: 10px 30px;" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{route('students.destroy', $student->id)}}"  style="padding: 10px 30px;"  class="btn btn-danger">Delete</a></td>
                </tr>

              @endforeach

</table>

<div style=" margin-top: 70px;">
     <!-- Pagination Links -->
     <div style="margin-left: 70px;">
        {{ $students->links() }}
    </div>

</div>
@endsection



