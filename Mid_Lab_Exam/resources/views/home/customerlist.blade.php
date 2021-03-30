@extends('layout.mini')
@section('title')
Customer list
@endsection

@section('section')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 align="center" style="padding:2%">ALL CUSTOMER LIST</h2>
            </div>
            <div class="panel-body">
                <div align="center">
                    <table class="table tableCustom" align="center">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>USERNAME</th>
                                    <th>CITY</th>
                                    <th>CREATED AT</th>
                                    <th>ACTION</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td><a href="#"><button class="btn btn-warning">Edit</button></a>
                                        <a href="{{route('home.delete',['id'=> $user->id])}}"><button class="btn btn-danger">Delete</button></a>
                                        <a href="#"><button class="btn btn-success">View Details</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


