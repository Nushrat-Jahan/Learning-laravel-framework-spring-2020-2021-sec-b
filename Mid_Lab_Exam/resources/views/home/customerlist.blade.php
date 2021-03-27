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
    <h2 align="center" style="padding:2%">ALL CUSTOMER LIST</h2>

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
</body>
</html>


