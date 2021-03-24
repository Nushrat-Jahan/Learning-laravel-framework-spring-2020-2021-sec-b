@extends('layout.teacherDashboard')

@section('pageTitle')
Teacher Home
@endsection

@section('extraCss')

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
    <h2 align="center" style="padding:2%">Welcome  <span style="color:#D50000"><b>{{$teacher->username}}</b></span> It is view student page</h2>
    <table class="table tableCustom" align="center">
        <thead>
            <tr>
                <th>@sortablelink('student_id')</th>
                <th>@sortablelink('name')</th>
                <th>@sortablelink('credits_completed')</th>
                <th>@sortablelink('status')</th>
                <th>@sortablelink('created_at')</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $list)
            <tr>
                <td>{{$list->student_id}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->credits_completed}}</td>
                <td>{{$list->dname}}</td>
                <td>{{$list->status}}</td>
                <td>{{$list->created_at}}</td>
                <td><button class="btn">Details</button></td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <div style="display:flex;justify-content:center;" >{{$course->appends(request()->input())->links()}}</div>
@endsection
