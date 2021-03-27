<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <title>Registration</title>
</head>
<body style="margin-top:8%">
    <h1 align="center">Registration</h1>
    @foreach ($errors->all() as $err)
        <p style="color:red" align="center">{{$err}}</p>
        @endforeach
    <form method="post" enctype="multipart/form-data">
		<fieldset>
			<table align="center">
                <tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
                </tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
                </tr>
                <tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirmpassword" value="{{old('confirmpassword')}}"></td>
				</tr>
                <tr>
					<td>Address</td>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
				</tr>
                <tr>
					<td>Company name</td>
					<td><input type="text" name="companyname" value="{{old('companyname')}}"></td>
				</tr>
                <tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
                </tr>
                <tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
                </tr>
                <tr>
                    <td>User type </td>
                    <td>
                        <select name="user_type" id="">
                            <option value="" selected>Select User type</option>
                            <option value="Admin" @if (old('user_type')=='Admin') selected @endif>Admin</option>
                            <option value="Customer" @if (old('user_type')=='Customer') selected @endif>Customer</option>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td></td>
					<td><input class="btn btn-success" type="submit" name="submit" value="Sign up">
                    <a href="{{route('login')}}" ><button  type="button" class="btn btn-outline-dark">Back</button></a></td>
				</tr>
			</table>

		</fieldset>

	</form>
</body>
</html>
