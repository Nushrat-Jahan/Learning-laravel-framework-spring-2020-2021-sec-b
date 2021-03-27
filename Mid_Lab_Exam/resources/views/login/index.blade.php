<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body style="margin-top:10%">
	<h1 align="center">Login Page</h1>

	<form method="post">
        @foreach ($errors->all() as $err)
        <p style="color:red">{{$err}}</p>
        @endforeach
		<fieldset>

			<table align="center">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
                    <td></td>
					<td><input class="btn btn-primary" type="submit" name="submit" value="Submit"></td>
					<td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="{{route('registration')}}" style="color:green">Not registered yet?</td>
                </tr>
			</table>
		</fieldset>
	</form>
    <p align="center" style="color:red" >{{session('msg')}}</p>
</body>
</html>
