@extends('layout.main')


@section('page_title')
<h1>Customer</h1>
<h1>Welcome home! {{ session('username') }} </h1>
@endsection

@section('nav_bar')
<a href="/logout">logout</a>
@endsection

@section('title')
Customer | ABC.com
@endsection
