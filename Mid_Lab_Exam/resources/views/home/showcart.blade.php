<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Add to cart</title>
</head>
<body>
    <form method="POST" action="">
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 align="center" style="padding:2%">{{$user->username}}'s cart</h2>
                <h3 align="center" style="color:green" style="padding:2%">TOTAL COST {{$total}} TAKA</h3>
            </div>
                <div class="panel-body">


    <div align="center">

    <table class="table tableCustom" align="center">
        <thead>
            <tr>
                <th>MEDICINE ID</th>
                <th>MEDICINE NAME</th>
                <th>MEDICINE TYPE</th>
                <th>MEDICINE PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>{{$cart->medicine_id}}</td>
                    <td>{{$cart->name}}</td>
                    <td>{{$cart->medicine_type}}</td>
                    <td>{{$cart->price}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>{{$cart->total}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @foreach ($errors->all() as $err)
        <p style="color:red" align="center">{{$err}}</p>
        @endforeach
            <h4>Address : <input type="text" name="address" value="{{old('address')}}"></h4>
            <h4>Payment Type :
                        <select name="payment_type" id="">
                            <option value="" selected>Select Payment Type</option>
                            <option value="cash" @if ($user['payment_type']=='cash') selected @endif>Cash</option>
                            <option value="card" @if ($user['payment_type']=='card') selected @endif>Card</option>
                        </select>
            </h4>
            <p style="color:red" align="center">{{session('msg')}}</p>
            <span align="center"><a href="#"><button class="btn btn-danger">Confirm Purchase</button></a></span></div>
            </div>
        </div>
    </div>
</div>

</form>
</body>
</html>


