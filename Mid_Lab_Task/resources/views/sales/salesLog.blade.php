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
        <a href="{{route('sales.physicalStore')}}"     ><button class="btn btn-danger" style="margin:2px">Back    </button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>


        <div style="margin-top:15px">
            <br>
            <h2 align="center" padding="20px"> SALES LOG OF PHYSICAL STORE</h2>
        </div>
    <a href="{{route('sales.salesLog.downloadSold')}}" ><button  type="button" class="btn btn-outline-danger" >Download Sales Report</button></a>
    <a href="{{route('sales.salesLog.downloadPending')}}" ><button  type="button" class="btn btn-outline-danger" >Download Pending Log</button></a>

    @foreach ($errors->all() as $err)
        <p style="color:red">{{$err}}</p>
     @endforeach

	<form action="" method="post" enctype="multipart/form-data">

        <h1>Upload your file</h1>
        <input type="file" name="file" class="btn btn-secondary" id="">
        <button type="submit" class="btn btn-success" style="margin:2px">Upload</button>

	</form>
</div>
    {{session('msg')}}
</body>
</html>
