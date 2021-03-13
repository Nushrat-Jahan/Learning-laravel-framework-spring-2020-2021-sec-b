@extends('layout.main')


@section('page_title')
<h1>Admin</h1>
<h1>Welcome home! {{ session('username') }} </h1>
@endsection

@section('nav_bar')
<a href="/logout">logout</a>
@endsection

@section('title')
Admin | ABC.com
@endsection
