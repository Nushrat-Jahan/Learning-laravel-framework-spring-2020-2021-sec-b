<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Sales</title>
</head>
<body>
    <h1 align="center">Sales Records</h1>
    <form method="post" enctype="multipart/form-data">
			<table align="center">
                <tr>
					<td>
                        <h1>PHYSICAL STORE SELL</h1>
                        <table border="1">
                            <tr><td><h3> Current Date Count </h3></td>
                                <td><h3> Last 7 Days Count </h3></td>
                            </tr>
                            <tr><td>{{$list['pday']}}</td>
                                <td>{{$list['p7day']}}</td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                    <a href="{{route('sales.physicalStore')}}" ><button  type="button" class="btn btn-default">Physical Store</button></a>
                    </td>
				</tr>
                <tr>
                    <td>
                        <h1>SOCIAL MEDIA SELL</h1>
                        <table border="1">
                            <tr><td><h3> Current Date Count </h3></td>
                                <td><h3> Last 7 Days Count </h3></td>
                            </tr>
                            <tr><td>{{$list['sday']}}</td>
                                <td>{{$list['s7day']}}</td>
                            </tr>

                        </table>
                    </td>

				</tr>
                <tr>
                    <td align="center">
                    <a href="{{route('sales.socialMedia')}}" ><button  type="button" class="btn btn-default">Social Media</button></a>
                    </td>
				</tr>
                <tr>
                    <td>
                        <h1>ECOMMERCE SELL</h1>
                        <table border="1">
                            <tr><td><h3> Current Date Count </h3></td>
                                <td><h3> Last 7 Days Count </h3></td>
                            </tr>
                            <tr><td>{{$list['eday']}}</td>
                                <td>{{$list['e7day']}}</td>
                            </tr>
                        </table>
                    </td>
				</tr>
                <tr>
                    <td align="center">
                    <a href="{{route('sales.ecommerce')}}" ><button  type="button" class="btn btn-default">Ecommerce Web App</button></a>
                    </td>
				</tr>
			</table>
	</form>
</body>
</html>
