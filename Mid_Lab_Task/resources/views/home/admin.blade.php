<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body style="margin-top:2%">
    <div align="center">
        <h1>Welcome home! {{ session('username') }} </h1>
        <a href="{{route('product.index')}}"   ><button class="btn btn-danger" style="margin:2px">Product Home             </button></a>
        <a href="{{route('sales.index')}}"><button class="btn btn-danger" style="margin:2px">Sales Home</button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>

    </div>
</body>
</html>
