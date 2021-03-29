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
                <h2 align="center" style="padding:2%">ALL MEDICINE LIST</h2>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->medicine_id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->medicine_type}}</td>
                <td>{{$user->price}}</td>
                <td><input class="quantity" min="0" placeholder="0" name="quantity" value="1" type="number"></td>
                </tr>
            </tbody>
        </table>
            <span align="center"><a href="{{route('home.addtocart',['id'=>$user->medicine_id])}}"><button class="btn btn-danger">Confirm</button></a></span></div>
            </div>
        </div>
    </div>
</div>

</form>
</body>
</html>


