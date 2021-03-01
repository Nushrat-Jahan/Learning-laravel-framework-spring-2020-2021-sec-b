<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Deletion</title>
</head>
<body>
    <form action="" method="post">

        {{--<h3>Are you sure you wants to delete user with ID: {{$id}} ?</h3>
        <button type="submit">Yes</button>--}}
        <a href="/home/userlist"> Back</a>
			<table>
				<tr>
					<td>Name: </td>
					<td>{{$user['name']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>CGPA</td>
					<td>{{ $user['cgpa'] }}</td>
				</tr>
				<tr>
					<td>Dept</td>
					<td>{{ $user['dept'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
    </form>
</body>
</html>
