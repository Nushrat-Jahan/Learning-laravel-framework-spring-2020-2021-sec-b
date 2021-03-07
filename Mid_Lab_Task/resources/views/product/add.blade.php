<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Existing Product</title>
</head>
<body style="margin-top:2%">
    <div align="center">

        <a href="{{route('product.index')}}"   ><button class="btn btn-danger" style="margin:2px">Product Home             </button></a>
        <a href="{{route('product.existing')}}"><button class="btn btn-danger" style="margin:2px">Existing Products</button></a>
        <a href="{{route('product.upcoming')}}"><button class="btn btn-danger" style="margin:2px">Upcoming Products</button></a>
        <a href="{{route('product.add')}}"     ><button class="btn btn-danger" style="margin:2px">Add Products     </button></a>
        <br>
        <a href="{{route('home.admin')}}"     ><button class="btn btn-danger" style="margin:2px">HOME   </button></a>
        <a href="javascript:history.back()"     ><button class="btn btn-danger" style="margin:2px">Back    </button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>

    </div>
    <div style="margin-top:15px">
        <h2 align="center" padding="20px">ADD PRODUCT</h2><br><br>
    </div>
    <div>
        @foreach ($errors->all() as $err)
                <p style="color:red">{{$err}}</p>
            @endforeach
        <form method="POST">
        <table align="center">
            <tr>
				<th>Product name </th>
				<td><input type="text" name="pname" value="{{old('pname')}}"></td>
			</tr>
			<tr>
                <th>Category </th>
                <td>
                    <select name="category" id="">
                        <option value="" selected>Select A Category</option>
                        <option value="Sweet" @if (old('category')=='Sweet') selected @endif>Sweet</option>
                        <option value="Grocery" @if (old('category')=='Grocery') selected @endif>Grocery</option>
                        <option value="Book" @if (old('category')=='Book') selected @endif>Book</option>
                        <option value="Makeup" @if (old('category')=='Makeup') selected @endif>Makeup</option>
                        <option value="Chocolate" @if (old('category')=='Chocolate') selected @endif>Chocolate</option>
                        <option value="Juice" @if (old('category')=='Juice') selected @endif>Juice</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Unit Price </th>
                <td><input type="number" name="unitPrice" value="{{old('unitPrice')}}"></td>
            </tr>
            <tr>
                <th>Quantity </th>
                <td><input type="number" name="quantity" value="{{old('quantity')}}"></td>
            </tr>
            <tr>
                <th>Vendor Name </th>
                <td>
                    <select name="vendor_id" id="">
                        <option value="" selected>Select Vendor name</option>
                        @foreach($vendors as $vendor)
                        <option value="{{$vendor->vendor_id}}" @if($vendor->vendor_id == old('vendor_id'))
                            selected @endif> {{$vendor->vendor_name}} </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
            <th>Status</th>
                <td>
                    <select  name="status" id="">
                        <option value="" selected>Select Status</option>
                        <option value="existing" @if (old('status')=='existing') selected @endif>Existing</option>
                        <option value="upcoming" @if (old('status')=='upcoming') selected @endif>Upcoming</option>
                    </select>
                </td>
            </tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit" class="btn btn-success" style="margin:5px">Add Product</button></td>
			</tr>
                <td> {{session('msg')}}</td>
            <tr>
            </tr>
		</table>
        </form>
    </div>

</body>
</html>
