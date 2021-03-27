<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>User Profile</title>
</head>
<body>
    <h1 align="center">{{$user['username']}}'s profile</h1>
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
</body>
</html>
