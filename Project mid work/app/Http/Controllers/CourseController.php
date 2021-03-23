<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Student;
use Illuminate\Http\Request;
use App\Teacher;
use App\TeacherCourse;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function teacherCourselist(Request $request)
    {
        $teacher = Teacher::where('username',$request->session()->get('username'))
                            ->first();

        $course = Course::join('departments', 'departments.department_id','=','courses.department_id')
                        ->SELECT ('courses.*', 'departments.name as dname')
                        ->sortable()
                        ->paginate(10);
        return view('teacher.viewCourselist',compact('course','teacher'));
    }

    public function teacherCourse(Request $request)
    {
        $teacher = Teacher::where('username',$request->session()->get('username'))
                            ->first();


        $course = Course::join('teacher_courses', 'teacher_courses.course_id','=','courses.course_id')
                        ->join('departments', 'departments.department_id','=','courses.department_id')
                        ->SELECT ('courses.*', 'departments.name as dname','teacher_courses.status')
                        ->sortable();

        $order =  $request->get('order');
        if($request->has('sort'))
        {
            $sort = $request->get('sort');
            if($sort=='dname'|| $sort=='status')
            {
                $course = $course->orderBy($sort,$order);
            }

        }

         $course = $course->paginate(10);
        return view('teacher.viewMyCourselist',compact('course','teacher','order'));
    }

    public function courseDetails(Request $request, $course_id)
    {
        $teacher = Teacher::where('username',$request->session()->get('username'))
                            ->first();
        $course = DB::table('courses','teacher_courses','departments', 'subjects')
                ->join('teacher_courses', 'teacher_courses.course_id','=','courses.course_id')
                ->join('departments', 'departments.department_id','=','courses.department_id')
                ->join('subjects', 'subjects.subject_code','=','courses.subject_code')
                ->SELECT ('courses.course_id', 'departments.name as dname', 'subjects.name as sname',
                        'courses.subject_code', 'courses.prerequisite', 'courses.semester',
                        'courses.name as cname','courses.credits', 'courses.created_at','teacher_courses.status')
                ->where('courses.course_id',$course_id)
                ->get()[0];

        return view('teacher.courseDetails',compact('teacher','course'));


    }
}
