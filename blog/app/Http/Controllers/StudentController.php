<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Student;

class StudentController extends Controller

{
  
    function  index (){
        // $students = Student::all(); 
        $students = Student::paginate(3);
        return view("students.index", ["students"=>$students]);


    }


    function show($id)
    {

        $student = Student::find($id);
        if($student == null){
             abort(404);
        }
        return view("students.show", ["student"=>$student]);


    }

    function create(){
        return view("students.create");

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

        // Create a new Student object and assign the data
        $student = new Student();
        $student->title = $data['title'];
        $student->email = $data['email'];
        $student->description = $data['description'];
        $student->creator = $data['creator'];
        $student->image = $data['image'] ?? null;  
        
        // Save the object to the database
        $student->save();

        // Redirect to the students.index route
        return to_route("students.index");
}


    function destroy($id){
        $student = Student::find($id);
        if($student == null){
            abort(404);
        }
        $student->delete();
        return  to_route("students.index");

    }


    function edit($id){

        $student=Student::findorfail($id);
        # use one function to check if object exists --> continue in the function --> otherwise fail

        return view("students.edit", ["student"=>$student]);

    }

    public function update(Request $request, $id)
{
    // Find the student record
    $student = Student::findOrFail($id);

    // Validate the request (optional)
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'creator' => 'required|string|max:255',
    ]);

    // Update the student record
    $student->title = $request->input('title');
    $student->description = $request->input('description');
    $student->creator = $request->input('creator');
    
    $student->save();

    // Redirect back to the list or another page
    return redirect()->route('students.index')->with('success', 'Post updated successfully.');
}

}

