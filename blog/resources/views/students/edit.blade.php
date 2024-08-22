

@extends('layouts.app')

@section('main')
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT') 

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" value="{{ $student->title }}" name="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" value="{{ $student->description }}" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post Creator</label>
            <input type="text" class="form-control" value="{{ $student->creator }}" name="creator">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

