<?php

namespace App\Http\Controllers;

use App\Models\StudentModel1;
use Illuminate\Http\Request;

class StudentController1 extends Controller
{
    // Show all students
    public function index()
    {
        $students = StudentModel1::all();
        return view('mongodbgetstudents1', compact('students'));
    }

    // Show form to create a new student
    public function create()
    {
        return view('mongodbcreatestudents1');
    }

    // Store a new student in MongoDB
    public function store(Request $request)
    {
        StudentModel1::create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'age'   => (int) $request->input('age'),
        ]);

        return redirect()->route('studentsdb.index');
    }

    // Show a single student
    public function show($id)
    {
        $student = StudentModel1::find($id);
        return view('mongodbgetsinglestudent1', compact('student'));
    }

    // Show edit form
    public function edit($id)
    {
        $student = StudentModel1::find($id);
        return view('mongodbeditstudents1', compact('student'));
    }

    // Update student data
    public function update(Request $request, $id)
    {
        $student = StudentModel1::find($id);

        if ($student) {
            $student->update([
                'name'  => $request->input('name'),
                'email' => $request->input('email'),
                'age'   => (int) $request->input('age'),
            ]);
        }

        return redirect()->route('studentsdb.index');
    }

    // Delete a student
    public function destroy($id)
    {
        StudentModel1::destroy($id);
        return redirect()->route('studentsdb.index');
    }
}