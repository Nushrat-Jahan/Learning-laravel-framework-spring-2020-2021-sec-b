<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Ecommerce Page</title>
</head>
<body style="margin-top:2%">
    <div align="center">

        <a href="{{route('sales.index')}}"   ><button class="btn btn-danger" style="margin:2px">Sales Home             </button></a>
        <a href="{{route('sales.physicalStore')}}"><button class="btn btn-danger" style="margin:2px">Physical Store</button></a>
        <a href="{{route('sales.ecommerce')}}"><button class="btn btn-danger" style="margin:2px">Ecommerce</button></a>
        <a href="{{route('sales.socialMedia')}}"     ><button class="btn btn-danger" style="margin:2px">Social Media    </button></a>
        <br>
        <a href="{{route('home.admin')}}"     ><button class="btn btn-danger" style="margin:2px">HOME   </button></a>
        <a href="javascript:history.back()"     ><button class="btn btn-danger" style="margin:2px">Back    </button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>

    </div>
        <div style="margin-top:15px">
            <h2 align="center" padding="20px"> PHYSICAL STORE SELL INFORMATION</h2>
        </div>
        <br>
        <table align="center" class="table table-hover"  style="width: 40%">
                <tr>
                    <th scope="col">ITEMS SOLD IN CURRENT DAYS</th>
                    <th scope="col"> {{$list['pday']}}</th>
                </tr>
                <tr>
                    <th scope="col">LAST 7 DAYS SOLD ITEMS</th>
                    <th scope="col"> {{$list['p7day']}}</th>
                </tr>
                <tr>
                    <th scope="col">MOST SOLD ITEMS</th>
                    <th scope="col"> {{$list['bestProduct']}}</th>
                </tr>
                <tr>
                    <th scope="col">AVERAGE SALE ON CURRENT MONTH</th>
                    <th scope="col"> {{$list['avg']}}</th>
                </tr>
                <tr>
                    <td align="center" colspan="2"><br>
                    <a href="{{route('sales.salesLog')}}" ><button class="btn btn-success" style="margin:2px">View Sales Log</button></a>
                    </td>
				</tr>
			</table>
            <br><br><br>
            @foreach ($errors->all() as $err)
                <p style="color:red">{{$err}}</p>
            @endforeach
            <form method="post" enctype="multipart/form-data">
            <h2 align="center">VALUE ENTRY</h2><br>
            <table align="center">
                <tr>
					<th align='left'>Customer name</th>
					<td><input type="text" name="cname" value="{{old('cname')}}"></td>
				</tr>
				<tr>
					<th align='left'>Address</th>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
                </tr>
                <tr>
					<th align='left'>Phone</th>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<th align='left'>Product Id</th>
					<td><input type="text" name="productid" value="{{old('productid')}}"></td>
                </tr>
                <tr>
					<th align='left'>Product Name</th>
					<td><input type="type" name="productname" value="{{old('productname')}}"></td>
				</tr>
                <tr>
					<th align='left'>Unit price</th>
					<td><input type="text" name="unitprice" value="{{old('unitprice')}}"></td>
				</tr>
                <tr>
					<th align='left'>Quantity</th>
					<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
				</tr>
                <tr>
					<th align='left' >Total Price</th>
					<td><input type="text" name="tprice" value="{{old('tprice')}}"></td>
				</tr>
                <tr>
                    <th align='left'>Payment Type</th>
                    <td>
                        <select name="payType" id="">
                            <option value="">Select Payment</option>
                            <option value="cash" @if(old('payType')=='cash') selected @endif>Cash</option>
                            <option value="card" @if(old('payType')=='card') selected @endif>Card</option>
                            <option value="online" @if(old('payType')=='online') selected @endif>Online</option>
                        </select>
                    </td>
                </tr>
				<tr>
					<td></td>
					<td><input class="btn btn-success" style="margin:2px" type="submit" name="submit" value="save"></td>
				</tr>
			</table>

	</form>
</body>
</html>
