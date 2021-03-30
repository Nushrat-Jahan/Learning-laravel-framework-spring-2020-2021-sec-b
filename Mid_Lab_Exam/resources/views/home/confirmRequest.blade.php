<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Confirm medicine request</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 align="center" style="padding:2%">CONFIRM MEDICINE REQUEST</h2>
                </div>
                    <div class="panel-body">
    <div align="center">
    <table class="table tableCustom table-striped" align="center">
        <thead>
            <tr>
                <th>CUSTOMER ID</th>
                <th>MEDICINE ID</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $cart)
            <tr>
               <td>{{$cart->user_id}}</td>
               <td>{{$cart->medicine_id}}</td>
               <td>{{$cart->quantity}}</td>
               <td>{{$cart->total}}</td>
               <td>{{$cart->request}}</td>
               <td><a href="{{route('home.acceptRequest',['uid'=>$cart->user_id,'mid'=>$cart->medicine_id])}}">
                <button class="btn btn-primary">Accept</button></a>
                <a href="{{route('home.denyRequest',['uid'=>$cart->user_id,'mid'=>$cart->medicine_id])}}"><button class="btn btn-info">Deny</button></a></td>
            </tr>
            @endforeach

        </tbody>
        </table>

            </div>
        </div>
    </div>
</div>

</body>
</html>


