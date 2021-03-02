<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales log</title>
</head>
<body>
    <h1>Sales log</h1>

    <form method="post" enctype="multipart/form-data">
        @csrf
		<fieldset>
			<legend>Add</legend>
			<table>
                <tr>
					<td>Customer name</td>
					<td><input type="text" name="cname" value="{{old('cname')}}"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
                </tr>
                <tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>Product Id</td>
					<td><input type="text" name="productid" value="{{old('productid')}}"></td>
                </tr>
                <tr>
					<td>Product Name</td>
					<td><input type="type" name="productname" value="{{old('productname')}}"></td>
				</tr>
                <tr>
					<td>Unit price</td>
					<td><input type="text" name="unitprice" value="{{old('unitprice')}}"></td>
				</tr>
                <tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
				</tr>
                <tr>
					<td>Total Price</td>
					<td><input type="text" name="tprice" value="{{old('tprice')}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

    @foreach($errors->all() as $err)
        {{$err}}<br>
    @endforeach
</body>
</html>
