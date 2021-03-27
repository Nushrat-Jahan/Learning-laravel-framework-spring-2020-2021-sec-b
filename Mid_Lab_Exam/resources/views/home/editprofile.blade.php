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
    <h2 align="center" style="padding:2%">EDIT YOUR PROFILE <span style="color:#D50000"><b>{{$user->username}}</b></span></h2>

    <p style="color:red">{{session('msg')}} </p>
    @foreach ($errors->all() as $err)
                <p style="color:red">{{$err}}</p>
            @endforeach
    <div align="center">
        <br>
        <form method="POST" action="" >
        <table align="center" class="table table-striped table-condensed table-hover"  style="width: 70%">

            <tr style="font-size:20px;">
                <th scope="col">NAME</th>
                <th scope="col"><input type="text" name="name" value="{{$user['name']}}"></th>
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
                <th scope="col"><input type="email" name="email" value="{{$user['email']}}"></th>
            </tr>
            <tr>
                <th scope="col">USER TYPE</th>
                <th scope="col">{{$user['user_type']}}</th>
            </tr>
            <tr>
                <th scope="col">ADDRESS</th>
                <th scope="col"><input type="text" name="address" value="{{$user['address']}}"></th>
            </tr>
            <tr>
                <th scope="col">COMPANY NAME</th>
                <td><input type="text" name="companyname" value="{{$user['companyname']}}"></td>
            </tr>
            <tr>
                <th scope="col">CITY</th>
                <td><input type="text" name="city" value="{{$user['city']}}"></td>
            </tr>
            <tr>
                <th scope="col">COUNTRY</th>
                <td><input type="text" name="country" value="{{$user['country']}}"></td>
            </tr>
            <tr>
                <th scope="col">JOIN DATE</th>
                <td>{{$user['created_at']->format('d-m-Y')}}</td>
            </tr>
            <tr>
				<td></td>
                <td><button type="submit" name="submit" class="btn btn-success">UPDATE</button></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>
