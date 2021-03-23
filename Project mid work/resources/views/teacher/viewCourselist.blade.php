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
    <h2 align="center" style="padding:2%">ALL COURSE LIST</h2>

    <table class="table tableCustom" align="center">
        <thead>
            <tr>
                <th>@sortablelink('course_id')</th>
                <th>@sortablelink('name')</th>
                <th>@sortablelink('credits')</th>
                <th>Department Name</th>
                <th>@sortablelink('created_at')</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($course as $list)
            <tr>
                <td>{{$list->course_id}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->credits}}</td>
                <td>{{$list->dname}}</td>
                <td>{{$list->created_at}}</td>
                <td><button class="btn">Details</button></td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <div style="display:flex;justify-content:center;" >{{$course->appends(request()->input())->links()}}</div>
@endsection
