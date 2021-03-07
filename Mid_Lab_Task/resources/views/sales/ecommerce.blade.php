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
            <h2 align="center" padding="20px"> ECOMMERCE CHANNEL</h2>
        </div>
</body>
</html>
