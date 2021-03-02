<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales list</title>
</head>
<body>

    <h1>Physical Store</h1>
    <a href="/system/sales">Back</a> |
    <a href="/logout">logout</a>

    <br>

    <table border="1">
        <tr>
            <td>Today's Sales:</td>
            <td>{{$list['day']}} items</td>
        </tr>
        <tr>
            <td>This week Sales:</td>
            <td>{{$list['daySeven']}} items</td>
        </tr>
        <tr>
            <td>Most Sold Product:</td>
            <td>{{$list['bestProduct']}}</td>
        </tr>
        <tr>
            <td>Average Sale of this month</td>
            <td>{{$list['avg']}} BDT</td>
        </tr>
        <tr>
            <td></td>
            <td><a href="{{route('sales.sales_log')}}"><button>View Sales Logs</button></a></td>
        </tr>
    </table>
</body>
</html>
