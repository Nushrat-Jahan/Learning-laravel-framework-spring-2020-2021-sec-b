<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body style="margin-top:10%">
	<h1 align="center">SALES LOG OF PHYSICAL STORE</h1>
    <a href="{{route('sales.salesLog.downloadSold')}}" ><button  type="button" class="btn btn-default" >Download Sales Report</button></a>
    <a href="{{route('sales.salesLog.downloadPending')}}" ><button  type="button" class="btn btn-default" >Download Pending Log</button></a>

    @foreach ($errors->all() as $err)
        <p style="color:red">{{$err}}</p>
     @endforeach

	<form action="" method="post" enctype="multipart/form-data">

        <h1>Upload your file</h1>
        <input type="file" name="file" id=""><button type="submit" class="btn btn-default" >Upload</button>

	</form>
    {{session('msg')}}
</body>
</html>
