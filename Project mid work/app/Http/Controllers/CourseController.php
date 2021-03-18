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


       /* $list = DB::select(DB::raw("SELECT courses.course_id, departments.name as dname, courses.subject_code,
                                           courses.name, courses.credits, courses.created_at
                                    FROM courses
                                    INNER JOIN departments
                                    ON courses.department_id=departments.department_id;"));
       // print_r($list[0]);*/

        $course = DB::table('courses','departments')
                    ->join('departments', 'departments.department_id','=','courses.department_id')
                    ->SELECT ('courses.course_id', 'departments.name as dname', 'courses.subject_code',
                    'courses.name', 'courses.credits', 'courses.created_at');

        $sortType="";
        if($request->has('sort'))
        {
            $sort = $request->get('sort');
            if($sort=='name'|| $sort=='course_id' || $sort=='credits' || $sort=='dname' || $sort=='created_at')
            {
                if($request->has('sortType'))
                {
                    $sortType =  $request->get('sortType');
                }
                else
                {
                    $sortType = 'asc';
                }

                $course = $course->orderBy($sort,$sortType)
                                ->paginate(10)
                                ->appends(['sort'=> $sort, 'sortType'=>$sortType]);
            }
            else
            {
                $course = $course->paginate(10);
            }

        }
        else
        {
            $course = $course->paginate(10);
        }

        return view('teacher.viewCourselist',compact('course','teacher','sortType'));
    }

    public function teacherCourse(Request $request)
    {
        $teacher = Teacher::where('username',$request->session()->get('username'))
                            ->first();


        $course = DB::table('courses','teacher_courses','departments')
                ->join('teacher_courses', 'teacher_courses.course_id','=','courses.course_id')
                ->join('departments', 'departments.department_id','=','courses.department_id')
                ->SELECT ('courses.course_id', 'departments.name as dname','courses.name',
                  'courses.credits', 'courses.created_at','teacher_courses.status');

        $sortType="";
        if($request->has('sort'))
        {
            $sort = $request->get('sort');
            if($sort=='name'|| $sort=='course_id' || $sort=='credits' || $sort=='dname' || $sort=='created_at' || $sort=='status')
            {
                if($request->has('sortType'))
                {
                    $sortType =  $request->get('sortType');
                }
                else
                {
                    $sortType = 'asc';
                }
                $course = $course->orderBy($sort,$sortType)
                                ->paginate(10)
                                ->appends(['sort'=> $sort, 'sortType'=>$sortType]);
            }
            else
            {
                $course = $course->paginate(10);
            }

        }
        else
        {
            $course = $course->paginate(10);
        }
        return view('teacher.viewMyCourselist',compact('course','teacher','sortType'));
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
                        'courses.name','courses.credits', 'courses.created_at','teacher_courses.status')
                ->where('course_id',$course_id);
        return view('teacher.courseDetails',compact('teacher','course'));

    }
}
