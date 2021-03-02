<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales list</title>
</head>
<body>

    <h1>Physical Store</h1>
    <a href="/home">Back</a> |
    <a href="/system/sales/physical_store">Physical store</a> |
    <a href="/system/sales/social_media">Social Media</a> |
    <a href="/system/sales/ecommerce">Ecommerce</a> |
    <a href="/logout">logout</a>

    <br>

    <table border="1">
        <tr>
            <td>PRODUCT ID</td>
            <td>PRODUCT SOLD</td>
            <td>CURRENT DATE</td>
            <td>LAST SEVEN DATE</td>
        </tr>

        @foreach ($list as $product)
        <tr>
            <td>{{ $product['productId'] }}</td>
            <td>{{ $product['sold'] }}</td>
            <td>{{ $product['currdate'] }}</td>
            <td>{{ $product['last7date'] }}</td>
        <tr>
        @endforeach
    </table>
</body>
</html>
