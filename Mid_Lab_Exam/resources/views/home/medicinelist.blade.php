@extends('layout.mini')
@section('title')
Medicine list
@endsection

@section('section')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 align="center" style="padding:2%">ALL MEDICINE LIST</h2>
            </div>
            <div class="panel-body">


    <div align="center">
        <p style="color:red"> {{session('delete')}}</p>
    <table class="table tableCustom" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CATEGORY</th>
                <th>TYPE</th>
                <th>PRICE</th>
                <th>VENDOR NAME</th>
                <th>CREATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->category}}</td>
                <td>{{$user->medicine_type}}</td>
                <td>{{$user->price}}</td>
                <td>{{$user->vendor_name}}</td>
                <td>{{$user->created_at}}</td>
                <td><a href="{{route('home.editmedicine',['id'=> $user->id])}}"><button class="btn btn-warning">Edit</button></a>
                    <a href="{{route('home.deletemedicine',['id'=> $user->id])}}"><button class="btn btn-danger">Delete</button></a>
                </tr>
                @endforeach
            </tbody>
        </table>
            <span align="center"><a href="{{route('home.addmedicine')}}"><button class="btn btn-success" >ADD</button></a></span></div>
            </div>
        </div>
    </div>
</div>
@endsection


