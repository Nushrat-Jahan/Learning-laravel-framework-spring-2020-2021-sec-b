@extends('layout.teacherDashboard')

@section('pageTitle')
Teacher Home
@endsection

@section('extraCss')
<link rel="stylesheet" href="{{asset('css/teacher/table.css')}}">

@endsection

@section('profilePicSource')

@if ($teacher->profile_pic)
{{asset($teacher->profile_pic)}}
@else
{{asset('images/dummy.png')}}
@endif

@endsection


@section('username')
{{$teacher->name}}
@endsection

@section('container')
    <h2 align="center" style="padding:2%">INFO OF COURSE ID <span style="color:red">{{$course->course_id}}</span></h2>
    <div align="center">
        <br>
        <table align="center" class="table table-striped table-condensed table-hover"  style="width: 70%">
            <tr style="font-size:20px;">
                <th scope="col">COURSE NAME</th>
               <th scope="col">{{$course->cname}}</th>
            </tr>
            <tr>
                <th scope="col">COURSE ID</th>
                <th>{{$course->course_id}}</th>
            </tr>
            <tr>
                <th scope="col">COURSE CREDIT</th>
                <th scope="col">{{$course->credits}}</th>
            </tr>
            <tr>
                <th scope="col">SUBJECT CODE</th>
                <th scope="col">{{$course->subject_code}}</th>
            </tr>
            <tr>
                <th scope="col">SUBJECT NAME</th>
                <th scope="col">{{$course->sname}}</th>
            </tr>
                <th scope="col">
            <tr>
                <th scope="col">SUBJECT PREREQUISITE</th>
                <th scope="col">{{$course->prerequisite}}</th>
            </tr>
            <tr>
                <th scope="col">DEPARTMENT NAME</th>
                <th scope="col">{{$course->dname}}</th>
            </tr>
            <tr>
                <th scope="col">SEMESTER</th>
                <th scope="col">{{$course->semester}}</th>
            </tr>
            <tr>
                <th scope="col">CREATED AT</th>
                <th scope="col">{{$course->created_at}}</th>
            </tr>
        </table>
            <a href="{{route('teacher.viewCourselist')}}" align="center">
            <button class="btn btn-success" style="margin:5px">Back</button></a>
        {{session('msg')}}
    </div>

@endsection
