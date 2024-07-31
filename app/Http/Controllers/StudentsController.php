<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassTeacher;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        //dd($students);

        return view('students.index',(compact('students')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $teachers = ClassTeacher::all();
   
        return view('students.create',(compact('teachers')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request);
        // Validate the request data
        $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'int|required',
            'class' => 'string|max:255|required',
            'admission_date' => 'date|required',
            'yearly_fees' => 'int|required',
             ]);

        $teacherId = $request->input('class_teacher_id');
        //dump($teacherId);

        $teacher = ClassTeacher::where('teacher_name', $teacherId)->first();
        if(!empty($teacher))
        {
            $teacherId = $teacher->id;
        } 

        //dd($teacherId);

        $student = Student::create([
            'student_name' => $request->input('student_name'),
            'class_teacher_id' => $teacherId,
            'class' => $request->input('class'),
            'admission_date' => $request->input('admission_date'),
            'yearly_fees' => $request->input('yearly_fees'),
            'created_at' => now(), // Set the created timestamp
            'updated_at' => now(),
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        $classTeacher = ClassTeacher::where('id', $student->class_teacher_id)->first(); 

        $classTeachers = ClassTeacher::where('id', '!=', $classTeacher->id)->get();

        return view('students.edit',compact('student','classTeacher','classTeachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        //dd($student);

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Student not found.');
         }

         $teacherId = $request->input('class_teacher_id');
         //dump($teacherId);
 
         $teacher = ClassTeacher::where('teacher_name', $teacherId)->first();
         if(!empty($teacher))
         {
             $teacherId = $teacher->id;
         } 

         $student->update([
            'student_name' => $request->input('student_name'),
            'class_teacher_id' => $teacherId,
            'class' => $request->input('class'),
            'admission_date' => $request->input('admission_date'),
            'yearly_fees' => $request->input('yearly_fees'),
            'created_at' => now(), // Set the created timestamp
            'updated_at' => now(),
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Students deleted successfully.');
    }
}
