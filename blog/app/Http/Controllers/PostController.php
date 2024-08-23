<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Post;

class PostController extends Controller

{
  
    function  index (){
    
        $posts = Post::paginate(3);
        return view("posts.index", ["posts"=>$posts]);


    }


    function show($id)
    {

        $post = Post::find($id);
        if($post == null){
             abort(404);
        }
        return view("posts.show", ["post"=>$post]);


    }

    function create(){
        return view("posts.create");

        $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:10',
            'creator' => 'required|string|max:255',
        ]);
    }


function store()
{
    $data = request()->all();

    if (request()->hasFile('image')) {
        // Store the image in the 'public/images' directory
        $image = request()->file('image');
        $image_name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $image_name);

        // Save the image name in your data array
        $data['image'] = $image_name;
    }

        // Create a new post object and assign the data
        $post = new Post();
        $post->title = $data['title'];
        $post->email = $data['email'];
        $post->description = $data['description'];
        $post->creator = $data['creator'];
        $post->image = $data['image'] ?? null;  
        
        // Save the object to the database
        $post->save();

        // Redirect to the posts.index route
        return to_route("posts.index");
}


    function destroy($id){
        $post = Post::find($id);
        if($post == null){
            abort(404);
        }
        $post->delete();
        return  to_route("posts.index");

    }


    function edit($id){

        $post=Post::findorfail($id);
        # use one function to check if object exists --> continue in the function --> otherwise fail

        return view("posts.edit", ["post"=>$post]);

    }

    public function update(Request $request, $id)
{
    // Find the post record
    $post = Post::findOrFail($id);

    // Validate the request (optional)
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'creator' => 'required|string|max:255',
    ]);

    // Update the post record
    $post->title = $request->input('title');
    $post->description = $request->input('description');
    $post->creator = $request->input('creator');
    
    $post->save();

    // Redirect back to the list or another page
    return redirect()->route('posts.index')->with('success', 'post updated successfully.');
}

}

