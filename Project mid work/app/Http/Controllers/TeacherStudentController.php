<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherStudentController extends Controller
{
    public function Studentlist(Request $request)
    {
        $teacher = Teacher::where('username',$request->session()->get('username'))
                    ->first();
        $student = Student::all()->sortable();
        return view('teacher.Studentlist',compact('teacher','student'));
    }
}
