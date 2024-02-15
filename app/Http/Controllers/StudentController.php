<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::with('academic', 'country')->get();
        if (request()->wantsJson()){ 
            return response()->json($students);
        }
        return view('index', compact('students'));
        //return response()->json($students);
    }
    public function create(): View
    {
        return view('create'); // for web
    }
    public function edit(string $id): View
    {
        $students = Student::find($id); // for web
        return view('edit')->with('students', $students);
    }

   // public function store(Request $request)
   // {

   // $student = Student::create($request->all());
    //$student-> academic()->create($request->input('academic')); //working api
  //  $student-> country()->create($request->input('country')); //working

   // return response()->json(['message' => "Student created successfully! "]);
   // }

   public function store(Request $request)
   {
    $student = Student::create($request->all());
    if ($request->has('academic')) 
    {
        $student->academic()->create($request->input('academic'));
    }
    if ($request->has('country')) 
    {
        $student->country()->create($request->input('country'));
    }
    return response()->json(['message' => "Student created successfully! "]);
}

    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('show')->with('students', $student); //for web to show data
    }

    public function update(Request $request, string $id) {

        $student = Student::find($id);
        $student->update($request->all());
        $student-> academic()->update($request->input('academic'));
        $student-> country()->update($request->input('country'));
    
        return response()->json(['message' => 'Student updated successfully']);
    }

    public function destroy($id) {
        // Find the student to delete
        $student = Student::find($id);

        //delete if the student associated in academic & country
        $student->academic()->delete();
        $student->country()->delete();
    
        // Delete the student record
        $student->delete();
    
        return response()->json(['message' => 'Student deleted successfully']);
    }
}
