<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="{{route('home.userlist')}}">Back</a>
    <form method="post">
			<table>
                <tr>
					<td>Image: </td>
					<td><img src="{{asset('/upload')}}/{{$user['profile_img']}}" width="100px" height="100px"> </td>
				</tr>
				<tr>
					<td>Name </td>
					<td> {{ $user['name'] }}</td>
				</tr>
                <tr>
					<td>Username </td>
					<td> {{ $user['username'] }}</td>
				</tr>
				<tr>
					<td>Password </td>
					<td> {{ $user['password'] }}</td>
				</tr>
                <tr>
					<td>CGPA </td>
					<td> {{ $user['cgpa'] }}</td>
				</tr>
                <tr>
					<td>Type </td>
					<td> {{ $user['type'] }}</td>
				</tr>
				<tr>
					<td>Department </td>
					<td> {{ $user['dept'] }}</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>