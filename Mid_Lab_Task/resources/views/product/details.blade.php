<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Product Details</title>
</head>
<body style="margin-top:2%">
    <div align="center">

        <a href="{{route('product.index')}}"   ><button class="btn btn-danger" style="margin:2px">Product Home             </button></a>
        <a href="{{route('product.existing')}}"><button class="btn btn-danger" style="margin:2px">Existing Products</button></a>
        <a href="{{route('product.upcoming')}}"><button class="btn btn-danger" style="margin:2px">Upcoming Products</button></a>
        <a href="{{route('product.add')}}"     ><button class="btn btn-danger" style="margin:2px">Add Products     </button></a>
        <br>
        <a href="{{route('home.admin')}}"     ><button class="btn btn-danger" style="margin:2px">HOME   </button></a>
        <a href="javascript:history.back()"     ><button class="btn btn-danger" style="margin:2px">Back    </button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>

    </div>

        <div style="margin-top:15px">
            <h2 align="center" padding="20px">PRODUCT DETAILS</h2><br><br>

        </div>
        <div align="center">
                @if($nf) <p>Vendor Id and Product Id doesn't match</p>
                @else
                <br>
                <table align="center" class="table table-striped table-condensed table-hover"  style="width: 70%">
                    <tr style="font-size:20px;">
                        <th scope="col">PRODUCT NAME</th>
                        <th scope="col">{{$product['product_name']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">{{$product['category']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">UNIT PRICE</th>
                        <th scope="col">{{$product['unit_price']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">QUANTITY</th>
                        <th scope="col">{{$product['quantity']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">PRODUCT STATUS</th>
                        <th scope="col">{{$product['status']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">VENDOR NAME</th>
                        <th scope="col">{{$vendor['vendor_name']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">VENDOR USERNAME</th>
                        <th scope="col">{{$vendor['username']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">VENDOR EMAIL</th>
                        <th scope="col">{{$vendor['email']}}</th>
                    </tr>
                    <tr>
                        <th scope="col">VENDOR STATUS</th>
                        <th scope="col">Active</th>
                    </tr>
                    <tr>
                        <th scope="col">DATE ADDED</a></th>
                        <td>{{$product['date_added']->format('d-m-Y')}}</td>
                    </tr>
                </table>
                @endif
            </div>
</body>
</html>
