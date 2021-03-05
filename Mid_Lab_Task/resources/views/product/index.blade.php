<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
    <form>
        <table align="center">
            <tr>
                <td><a href="{{route('product.index')}}"   ><button class="btn btn-danger" style="margin:10px" >Home             </button></a></td>
                <td><a href="{{route('product.existing')}}"><button class="btn btn-danger" style="margin:10px">Existing Products</button></a></td>
                <td><a href="{{route('product.upcoming')}}"><button class="btn btn-danger" style="margin:10px">Upcoming Products</button></a></td>
                <td><a href="{{route('product.add')}}"     ><button class="btn btn-danger" style="margin:10px">Add Products     </button></a></td>
            </tr>
        <table>
            <div style="margin-top:15px">
            <h1 align="center" padding="20px">PRODUCT INFORMATION</h1><br><br>
            <h3 align="center">Existing Products : {{$list['existing']}}</h3>
            <h3 align="center">Upcoming Products : {{$list['upcoming']}}</h3>
            </div>
    <form>
</body>
</html>
