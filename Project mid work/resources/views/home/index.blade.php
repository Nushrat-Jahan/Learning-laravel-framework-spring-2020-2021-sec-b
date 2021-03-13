{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <a href="/home/create">Create user</a> |
    <a href="{{route('home.userlist')}}">View user list</a> |
    <!--<a href="/home/userlist">View user list</a> |-->
    <a href="/logout">logout</a>
    {{session('msg')}}
</body>
</html>
--}}
{{--@extends('layout.main')--}}
@extends('layout.nav_bar')


@section('page_title')
<h1>Welcome home! {{ session('username') }} </h1>
@endsection


@section('title')
Home | ABC.com
@endsection
