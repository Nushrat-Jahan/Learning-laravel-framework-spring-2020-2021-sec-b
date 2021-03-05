<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Physical Store</title>
</head>
<body>
    <h1 align="center">PHYSICAL STORE SELL</h1>
    <form method="post" enctype="multipart/form-data">
			<table align="center">
                <tr>
                    <th align='left'>ITEMS SOLD IN CURRENT DAYS</th>
                    <td>: {{$list['pday']}}</td>
                </tr>
                <tr>
                    <th align='left'>LAST 7 DAYS SOLD ITEMS</th>
                    <td>: {{$list['p7day']}}</td>
                </tr>
                <tr>
                    <th align='left'>MOST SOLD ITEMS</th>
                    <td>: {{$list['bestProduct']}}</td>
                </tr>
                <tr>
                    <th align='left'>AVERAGE SALE ON CURRENT MONTH</th>
                    <td>: {{$list['avg']}}</td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><br>
                    <a href="{{route('sales.salesLog')}}" ><button  type="button" class="btn btn-default" >View Sales Log</button></a>
                    </td>
				</tr>
			</table>
            <br><br><br>
            @foreach ($errors->all() as $err)
                <p style="color:red">{{$err}}</p>
            @endforeach

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
					<td><input type="submit" name="submit" value="save"></td>
				</tr>
			</table>

	</form>
</body>
</html>
