<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Add medicine</title>
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
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category" id="">
                            <option value="" selected>Select Category</option>
                            <option value="aspirin" @if (old('category')=='aspirin') selected @endif>Aspirin</option>
                            <option value="paracitamol" @if (old('category')=='paracitamol') selected @endif>Paracitamol</option>
                        </select>
                    </td>
                </tr>
				<tr>
					<td>Medicine Type</td>
                    <td>
                        <select name="medicine_type" id="">
                            <option value="" selected>Select Medicine Type</option>
                            <option value="solid" @if (old('medicine_type')=='solid') selected @endif>Solid</option>
                            <option value="liquid" @if (old('medicine_type')=='liquid') selected @endif>Liquid</option>
                        </select>
                    </td>
                </tr>
                <tr>
					<td>Vendor Name</td>
					<td><input type="text" name="vendor_name" value="{{old('vendor_name')}}"></td>
				</tr>
                <tr>
					<td>Price</td>
					<td><input type="decimal" name="price" value="{{old('price')}}"></td>
				</tr>
                <tr>
					<td>Availability</td>
					<td>
                        <select name="availability" id="">
                            <option value="" selected>Select Availability</option>
                            <option value="available" @if (old('medicine_type')=='available') selected @endif>Available</option>
                            <option value="not available" @if (old('medicine_type')=='not available') selected @endif>Not available</option>
                        </select>
				</tr>
				<tr>
                    <td></td>
					<td><input class="btn btn-success" type="submit" name="submit" value="Update"></td>
				</tr>
			</table>

		</fieldset>

	</form>
</body>
</html>
