<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Edit Product</title>
</head>
<body style="margin-top:2%">
    <div align="center">

        <a href="{{route('product.index')}}"   ><button class="btn btn-danger" style="margin:2px">Product Home     </button></a>
        <a href="{{route('product.existing')}}"><button class="btn btn-danger" style="margin:2px">Existing Products</button></a>
        <a href="{{route('product.upcoming')}}"><button class="btn btn-danger" style="margin:2px">Upcoming Products</button></a>
        <a href="{{route('product.add')}}"     ><button class="btn btn-danger" style="margin:2px">Add Products     </button></a>
        <br>
        <a href="javascript:history.back()"     ><button class="btn btn-danger" style="margin:2px">Back    </button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>

    </div>
    <div style="margin-top:15px">
        <h2 align="center" padding="20px">EDIT PRODUCT ID: {{$list['id']}}</h2><br><br>
    </div>
    <div>
        @foreach ($errors->all() as $err)
                <p style="color:red">{{$err}}</p>
            @endforeach
        <form method="POST">
        <table align="center">
            <tr>
				<th>Product name </th>
				<td><input type="text" name="pname" value="{{$list['product_name']}}"></td>
			</tr>
			<tr>
                <th>Category </th>
                <td>
                    <select name="category" >
                        <option value="" selected>Select A Category</option>
                        <option value="Sweet" @if ($list['category']=='Sweet') selected @endif>Sweet</option>
                        <option value="Grocery" @if ($list['category']=='Grocery') selected @endif>Grocery</option>
                        <option value="Book" @if ($list['category']=='Book') selected @endif>Book</option>
                        <option value="Makeup" @if ($list['category']=='Makeup') selected @endif>Makeup</option>
                        <option value="Chocolate" @if ($list['category']=='Chocolate') selected @endif>Chocolate</option>
                        <option value="Juice" @if ($list['category']=='Juice') selected @endif>Juice</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Unit Price </th>
                <td><input type="number" name="unitPrice" value="{{$list['unit_price']}}"></td>
            </tr>
            <tr>
                <th>Quantity </th>
                <td><input type="number" name="quantity" value="{{$list['quantity']}}"></td>
            </tr>
            <tr>
            <th>Status</th>
                <td>
                    <select  name="status" id="">
                        <option value="" selected>Select Status</option>
                        <option value="existing" @if ($list['status']=='existing') selected @endif>Existing</option>
                        <option value="upcoming" @if ($list['status']=='upcoming') selected @endif>Upcoming</option>
                    </select>
                </td>
            </tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit" class="btn btn-success" style="margin:5px">Update Product</button></td>
			</tr>
                <td> {{session('msg')}}</td>
            <tr>
            </tr>
		</table>
        </form>
    </div>

</body>
</html>
