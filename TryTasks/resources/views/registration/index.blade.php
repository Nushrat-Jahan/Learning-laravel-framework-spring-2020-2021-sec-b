<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>

    <form method="post" enctype="multipart/form-data">
        @csrf
		<fieldset>
			<legend>Add</legend>
			<table>
                <tr>
					<td>Full name</td>
					<td><input type="text" name="fullname" value="{{old('fullname')}}"></td>
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
					<td>Phone number</td>
					<td><input type="text" name="pnumber" value="{{old('pnumber')}}"></td>
				</tr>
                <tr>
					<td>Type</td>
					<td>
                        <select name='type'>
                            <option value="admin">ADMIN</option>
                            <option value="customer">CUSTOMER</option>
                            <option value="vendor">VENDOR</option>
                            <option value="salesman">SALESMAN</option>
                        </select>
                    </td>
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
					<td></td>
					<td><input type="submit" name="submit" value="Sign up"></td>
				</tr>
			</table>
		</fieldset>
	</form>

    @foreach($errors->all() as $err)
        {{$err}}<br>
    @endforeach
</body>
</html>