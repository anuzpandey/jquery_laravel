<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        $jsonStudents = json_encode($students);
        // dd($jsonStudents);
        return view ('studentform', compact('jsonStudents', 'students'));
    }

    public function studentAdd(Request $request) {
        return ($request);
        $student = new Student();
        $student->firstName = $request->input('firstname');
        $student->lastName = $request->input('lastname');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->save();
        
      
    }
}
