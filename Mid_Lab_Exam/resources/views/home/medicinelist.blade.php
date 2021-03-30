<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
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


</body>
</html>


