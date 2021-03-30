@extends('layout.mini')
@section('title')
User profile
@endsection

@section('section')
    <h1 align="center">{{$user['username']}}'s profile</h1>
    <h4 align="center" style="color:red">{{session('update')}}</h4>
    <div align="center">
        <br>
        <table align="center" class="table table-striped table-condensed table-hover"  style="width: 70%">
    <tr style="font-size:20px;">
        <th scope="col">NAME</th>
        <th scope="col">{{$user['name']}}</th>
    </tr>
    <tr>
        <th scope="col">USERNAME</th>
        <th scope="col">{{$user['username']}}</th>
    </tr>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">{{$user['id']}}</th>
    </tr>
    <tr>
        <th scope="col">EMAIL</th>
        <th scope="col">{{$user['email']}}</th>
    </tr>
    <tr>
        <th scope="col">USER TYPE</th>
        <th scope="col">{{$user['user_type']}}</th>
    </tr>
    <tr>
        <th scope="col">ADDRESS</th>
        <th scope="col">{{$user['address']}}</th>
    </tr>
    <tr>
        <th scope="col">COMPANY NAME</th>
        <th scope="col">{{$user['companyname']}}</th>
    </tr>
    <tr>
        <th scope="col">CITY</th>
        <th scope="col">{{$user['city']}}</th>
    </tr>
    <tr>
        <th scope="col">COUNTRY</th>
        <th scope="col">{{$user['country']}}</th>
    </tr>
    <tr>
        <th scope="col">JOIN DATE</th>
        <td>{{$user['created_at']->format('d-m-Y')}}</td>
    </tr>
    <tr>
        <td></td>
        <td><a href="{{route('home.index')}}">
            <button class="btn btn-success" style="margin:5px">BACK</button></a>
            <a href="{{route('home.editprofile')}}">
                <button class="btn btn-success" style="margin:5px">Edit</button></a>

        </td>
    </tr>
</table>
    </div>
@endsection
