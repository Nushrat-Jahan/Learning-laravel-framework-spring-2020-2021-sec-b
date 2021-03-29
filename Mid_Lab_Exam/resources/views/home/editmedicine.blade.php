<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Edit medicine</title>
</head>
<body style="margin-top:8%">
    <h1 align="center">Edit medicine</h1>
    @foreach ($errors->all() as $err)
        <p style="color:red" align="center">{{$err}}</p>
        @endforeach
    <form method="post">
		<fieldset>
			<table align="center">
                <tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{$user['name']}}"></td>
				</tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category" id="">
                            <option value="aspirin" @if ($user['category']=='aspirin') selected @endif>Aspirin</option>
                            <option value="paracitamol" @if ($user['category']=='paracitamol') selected @endif>Paracitamol</option>
                        </select>
                    </td>
                </tr>
				<tr>
					<td>Medicine Type</td>
                    <td>
                        <select name="medicine_type" id="">
                            <option value="" selected>Select Medicine Type</option>
                            <option value="solid" @if ($user['medicine_type']=='solid') selected @endif>Solid</option>
                            <option value="liquid" @if ($user['medicine_type']=='liquid') selected @endif>Liquid</option>
                        </select>
                    </td>
                </tr>
                <tr>
					<td>Vendor Name</td>
					<td><input type="text" name="vendor_name" value="{{$user['vendor_name']}}"></td>
				</tr>
                <tr>
					<td>Price</td>
					<td><input type="decimal" name="price" value="{{$user['price']}}"></td>
				</tr>
                <tr>
					<td>Availability</td>
					<td>
                        <select name="availability" id="">
                            <option value="available" @if ($user['availability']=='available') selected @endif>Available</option>
                            <option value="not available" @if ($user['availability']=='not available') selected @endif>Not available</option>
                        </select>
				</tr>
				<tr>
                    <td></td>
					<td><input class="btn btn-success" type="submit" name="submit" value="Update"></td>
				</tr>
			</table>

		</fieldset>
{{session('msg')}}
	</form>
</body>
</html>
